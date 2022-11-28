$(function() {
	 /* =========== > bloc de d'initialisation */
   $('#username').focus();
   $('.frm-ajout').hide();
   $('.versement').hide();
   $('.impression').hide();
   $('.frm-1-date').hide();
   $('.frm-2-dates').hide();
   $('.frm-t-dates').hide();
   $('.frm-liste-r').hide();
	 $('.modifProd').hide();
   $('#nivAgent').hide();
   $('.formu').hide();
   $('.suppAgent').hide();
   $('.ok').hide();
   setInterval(function(){
      NombreProduitPanier();
      NombreProduitPanier2();
      totalP();
      totalpR();
      vg();
      CRED();
      CMD();
     },1000
   );//affiche la date
    
   listeEvoluProduit();
	 listeProduct();
   listeAgent();
   selectUser();
   selectUser2();
   listeProductV();
   listeProductCred();
   listeProductRupture();
   listeCreanciers();
   page();
   pageV();
   pageR();
   pageCreance();
   pageEvo();
   pageCred();
   panier();
   panier2();
    
       // authentification
       $('.frm').click(function(event){
              event.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();
                $.ajax({
                    url:"actions/action.php",
                    method : "POST",
                    data: {con:1,username:username,password:password},
                    success : function(data){
                      if (data == "ok") {
                         window.location.href ="home.php";
                     }else{
                       $("#msg").html(data);
                     }
                             
                    }
                });    
          });/* fin authentification */

        $('#ajoutAgent').click(function(event){
              event.preventDefault();
              viderAgent();
              $('.frmodAgent').hide();
              $('.suppAgent').hide();
              $('.msgModifAgent').hide();
              $('#nivAgent').toggle(1000);
              $('#agentList').hide(1000);
        });

        $('#listeAgent').click(function(event){
              event.preventDefault();
              $('.suppAgent').hide();
              $('.frmodAgent').hide();
              $('.msgModifAgent').hide();
              $('#nivAgent').hide(1000);
              $('#agentList').toggle(1000);
              listeAgent();
          });

         $('#ajout_agent').click(function(event){
              event.preventDefault();
              var nom = $('#nom').val();
              var pre = $('#pre').val();
              var tel = $('#tel').val();
              var type = $('#type').val();
              var username = $('#username').val();
              var password = $('#password').val();
              ajoutAgent(nom,pre,tel,username,password,type);
              
          });


         $("body").delegate(".modifAg","click",function(){
              $('.suppAgent').hide();
              var matAgent = $(this).attr('matAgent');
              $('#agentList').hide();
              $('#nivAgent').hide();
              $('.frmodAgent').show();
              FormulaireDetailAgent(matAgent);
         });

         $('body').delegate(".modifAgent","click",function(){
                  var nom = $('#n_ag').val();
                  var pre = $('#p_ag').val();
                  var mat = $('#m_ag').val();
                  var tel = $('#t_ag').val();
                  var type = $('#s_ag').val();
                  var username = $('#u_ag').val();
                  var password = $('#pw_ag').val();
                 // alert(mat)
                  ModifierAgent(nom,pre,tel,type,username,password,mat);
          });

         $("body").delegate(".suppAg","click",function(){
              $('#liste_ag').hide();
              $('.pagination').hide();
              $('.suppAgent').show();
              var nomAgent = $(this).attr('nomAgent');
              var matAgent = $(this).attr('matAgent');
              $('#supp_agent').show();
              $('.emplo').html(nomAgent);
              $('.ok').hide();
              $('.att').show();

              $('#annul_agent').val('Non');
              $('#matAgentSup').val(matAgent);
              //alert(nomAgent);
        });

         $('#supp_agent').click(function(event){
                 event.preventDefault();
                $('.att').hide();
                $('#supp_agent').hide();
                var matAgent = $('#matAgentSup').val();
                suppAgent(matAgent);
          });

	 /* =========== > bloc d'affichage <=============== */
	 /* =========== > affichage frm ajout */
   $('.ancien').click(function(e){ 
    e.preventDefault()
    $('.nouveau').hide(1000);
    $('.anncienClient').toggle(1000);
   });

	 $('.aff_frm_ajout').on('click',function(){
    $('.modifProd').hide(1000);
    $('.frm-liste').hide(1000);
    $('.frm-ajout').show(1000);
   });

   $('.aff_frm_1_date').on('click',function(){
      viderTs();
      $('.frm-2-dates').hide(1000);
      $('.frm-t-dates').hide(1000);
      $('.frm-1-date').show(1000);
   });

   $('.aff_frm_2_dates').on('click',function(){
      viderTs();
      $('.frm-1-date').hide(1000);
      $('.frm-t-dates').hide(1000);
      $('.frm-2-dates').show(1000);
   });

   $('.aff_frm_t_vente').on('click',function(){
      $('.frm-1-date').hide(1000);
      $('.frm-2-dates').hide(1000);
      $('.frm-t-dates').show(1000);
   });

    $('.tpR').on('click',function(){
      $('.frm-liste-r').toggle(1000);
   });

     $('.tp').on('click',function(){
      window.location.href='home.php?p=produits';
   });

   $('.aff_frm_panier').on('click',function(){
    $('.frm-liste').toggle(1000);
    $('.frm-ajout').toggle(1000);
   });
     /* =========== > affichage frm liste */
	 $('.aff_frm_liste').on('click',function(){
    $('.modifProd').hide(1000);
	 	$('.frm-ajout').hide(1000);
	 	$('.frm-liste').show(1000);
	 });

    $('body').delegate('.btnMdfP','click',function(){
       $('.id').val($(this).attr('idPr'));
       $('.ref').val($(this).attr('refPr'));
       $('.desi').val($(this).attr('desiPr'));
       $('.qte').val($(this).attr('qtePr'));
       $('.pa').val($(this).attr('paPr'));
       $('.pv').val($(this).attr('pvPr'));
       $('.frm-liste').hide(1000);
       $('.modifProd').show(1000);
    });

    $('body').delegate('.AnnulProd','click',function(){
       $('.modifProd').hide(1000);
       $('.frm-liste').show(1000);
    });
    
    //modifier produit
    $('body').delegate('.ModifProd','click',function(){
         var id = $('.id').val();
         var ref = $('.ref').val();
         var desi = $('.desi').val();
         var qte = $('.qte').val();
         var pa = $('.pa').val();
         var pv = $('.pv').val();
         modifierProd(id,ref,desi,qte,pa,pv);
    });

   //ajouter un produit
   $(".btnAjoutProd").click(function(e){
      e.preventDefault();
       var fd=new FormData();
      var files=$('#file')[0].files;
      if(files.length > 0)
      {
         fd.append('file',files[0]);
         alert("fichier charger");

      }else{
         alert("fichier non charger");
      }
      var txt_titre = $('#txt_titre').val();
      /*var txt_titre = $('#txt_titre').val();
      alert(txt_titre); 
      alert(fd); 
      console.log(fd); */      

      /* var design = $('#design').val();
       var qte = $('#qte').val();
       var pa = $('#pa').val();
       var pv = $('#pv').val();*/
       ajouterProduit(fd,txt_titre);
   });

	 //pagination
      $("body").delegate(".page","click",function(){
          var page = $(this).attr('page');
          $.ajax({
              url:"actions/action.php",
              method: "POST",
              data: {listeProduit:1,setPage:1,pageNumber:page},
              success:function(data){
                 $(".liste_product").html(data);
              }
          });
      });

      //pagination2
      $("body").delegate(".pageV","click",function(){
          var page = $(this).attr('pageV');
          $.ajax({
              url:"actions/action.php",
              method: "POST",
              data: {listeProduitV:1,setPage:1,pageNumber:page},
              success:function(data){
                 $(".liste_product_v").html(data);
              }
          });
      });

      //pagination3
      $("body").delegate(".pageR","click",function(){
          var page = $(this).attr('pageR');
          $.ajax({
              url:"actions/action.php",
              method: "POST",
              data: {listeProduitRupture:1,setPage:1,pageNumber:page},
              success:function(data){
                 $(".liste_product_r").html(data);
              }
          });
      });

      $("body").delegate(".pageCred","click",function(){
          var page = $(this).attr('pageCred');
          $.ajax({
              url:"actions/action.php",
              method: "POST",
              data: {listeProduitCred:1,setPage:1,pageNumber:page},
              success:function(data){
                 $(".liste_product_cred").html(data);
              }
          });
      });

      $("body").delegate(".pageCre","click",function(){
          var page = $(this).attr('pageCre');
          $.ajax({
              url:"actions/action.php",
              method: "POST",
              data: {listeCreancier:1,setPage:1,pageNumber:page},
              success:function(data){
                 $(".listeCreanciers").html(data);
              }
          });
      });

      $("body").delegate(".pageEvo","click",function(){
          var page = $(this).attr('pageEvo');
          $.ajax({
              url:"actions/action.php",
              method: "POST",
              data: {listeEvoluProduit:1,setPage:1,pageNumber:page},
              success:function(data){
                 $(".listeEvolution").html(data);
              }
          });
      });

      //Faire versement
      $("body").delegate(".fvers","click",function(){
          $('.crea').toggle(1000);
          $('.versement').toggle(1000);
          var id_cred = $(this).attr('IDCRED');
          var momo = $(this).attr('momo');
          var reste = $(this).attr('reste');
          var dd = $(this).attr('dd');
          var date = dd.split(" ");
          var annee = date[0].split('-');
          var an = annee[2]+'-'+annee[1]+'-'+annee[0]+' à '+date[1];
          var mtt = $(this).attr('mtt');
          $('#IDCRED').val(id_cred);
          $('#nomCli').val(momo);
          $('.momo').html("Faire versement pour <b>"+momo+"</b> pour les <b>"+mtt+" fcfa </b> du <b>"+an+"</b> . Il reste <b>"+reste+" fcfa.</b>");
      });

      $('body').delegate('.ve','click',function(){
            var IDCRED = $('#IDCRED').val();
            var montant= $('.montant').val();
            var nom = $("#nomCli").val();
            faireVersement(IDCRED,montant,nom);
      });

      $('body').delegate('.fermer','click',function(){
            Fermer();
      });

      $('body').delegate('.supCred','click',function(){
            var IDCRED = $(this).attr('IDCRED');
            supCred(IDCRED);
      });



      $(".searchProduit").keyup(function(){
               var search = $(this).val();
               rechercheProduit(search);  
      });

      $(".searchCredClient").keyup(function(){
            var search = $('.searchCredClient').val();
            $('.versement').hide(1000); 
            $('.crea').show(1000); 
            rechercheClientCred(search);
      });

       $(".searchProduitV").keyup(function(){
               var search = $(this).val();
               rechercheProduitV(search);
               rechercheProduitCred(search);  
      });

      $('body').delegate('.augQte','click',function(){
            var id_prod = $(this).attr('momo');
            var qte= $('.qte-'+id_prod).val();
            var qte_aug = $('.augQte-'+id_prod).val();
            augmenterQte(id_prod,qte,qte_aug);
      });

      $('body').delegate('.rechByDate','click',function(){
        var date = $('.date').val();
        var usID = $('.IDuser').val();
        venteParDate(date,usID);

      });

      $('body').delegate('.rechBy2Dates','click',function(){
        var d1 = $('.d1').val();
        var d2 = $('.d2').val();
        var usID = $('.IDuser2').val();
        venteDeuxDates(d1,d2,usID);
      });

      $('body').delegate('.rechByTDates','click',function(){
        var d1 = $('.d3').val();
        var d2 = $('.d4').val();
        venteTDates(d1,d2);
      });
      
      //ajouter dans le panier
      $('body').delegate('.btn_ajout','click',function(){
            var id_prod = $(this).attr('IDprod');
            var ref   = $('.ref-'+id_prod).val();
            var design= $('.des-'+id_prod).val();
            var pu    = $('.pu-'+id_prod).val();
            var qte   = $('.qte-'+id_prod).val();
            ajouterPanier(ref,design,pu,qte);
      });

      $('body').delegate('.btn_ajout_cred','click',function(){
            var id_prod = $(this).attr('IDprod');
            var ref   = $('.ref-'+id_prod).val();
            var design= $('.des-'+id_prod).val();
            var pu    = $('.pu-'+id_prod).val();
            var qte   = $('.qte-'+id_prod).val();
            ajouterPanierCred(ref,design,pu,qte);
      });

      //augmenter la quatité de produit dans le panier
      $('body').delegate('.btnAug','click',function(){
            var ref = $(this).attr('IDprod');
            var qte = $('.qte-'+ref).val();
            AugmenterQtePanier(ref,qte);
      });

      $('body').delegate('.btnAugCred','click',function(){
            var ref = $(this).attr('IDprod');
            var qte = $('.qte-'+ref).val();
            AugmenterQtePanierCred(ref,qte);
      });

      //Diminuer la quatité de produit dans le panier
      $('body').delegate('.btnDim','click',function(){
            var ref = $(this).attr('IDprod');
            var qte = $('.qte-'+ref).val();
            DiminuerQtePanier(ref,qte);
      });

      $('body').delegate('.btnDimCred','click',function(){
            var ref = $(this).attr('IDprod');
            var qte = $('.qte-'+ref).val();
            DiminuerQtePanierCred(ref,qte);
      });

      //retirer produit dans le panier
      $('body').delegate('.btnReti','click',function(){
            var ref = $(this).attr('IDprod');
            RetirerProduiPanier(ref);
      });

      $('body').delegate('.btnRetiCred','click',function(){
            var ref = $(this).attr('IDprod');
            RetirerProduiPanierCred(ref);
      });

       //valider l'achat
      $('body').delegate('.btnValiderAchat','click',function(){
        var CMD = $('#CMD').val();
         validerLaVente(CMD);
      });

      $('body').delegate('.btnValiderAchatCred','click',function(){
        var CRED = $('#CRED').val();
        var nom= $('#nomcli').val();
        var piece = $('#Pcli').val();
        var tel = $('#telcli').val();
         validerLaVenteCred(CRED,piece,nom,tel);
      });

      $('body').delegate('.btnValiderAchatCredAncien','click',function(){
        var CRED = $('#CRED').val();
        var piece = $('.ancienClient').val();
         validerLaVenteCredAncien(CRED,piece);
      });

      //vider le panier
      $('body').delegate('.btnVider','click',function(){
            viderPanier();
      });

      $('body').delegate('.btnViderCred','click',function(){
            viderPanier2();
      });

      $('body').delegate('.btnSupApp','click',function(){
           var idapp = $(this).attr('idapp');
            supAppro(idapp);
      });

      $('body').delegate('.btnSuppPr','click',function(){
           var idPr = $(this).attr('idPr');
           var refPr = $(this).attr('refPr');
            supProduit(idPr,refPr);
      });

      $('body').delegate('.annulerModifAgent','click',function(){
          $('.frmodAgent').hide(1000);
          listeAgent();
          $('.agentList').show(1000);
      });

      $('body').delegate('.rechDateApp','click',function(){
          var date = $('.dateAppRech').val();
          EvoluProduitDate(date);
      });

      $('body').delegate('.actualiser','click',function(){
          $('.dateAppRech').val('');
          listeEvoluProduit();
      });



	 /* ========= > bloc des fonctions */
     // ajouter un produit dans la data;
    function ajouterProduit(fd,txt_titre) {
       //console.log("fd",fd);
       //console.log("txt_titre",txt_titre);
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          processData:false,
          contentType:false,
          data:{addProduct:1,txt_titre:txt_titre,fd:fd},
          success:function(data){
             if (data == 0) {

               console.log(data); 
                alert("Produit ajout avec succes");
                listeProduct();
                page();
                listeProductV();
                viderChampsProduit()
                /*$('.frm-ajout').toggle(1000);
                $('.frm-liste').toggle(1000);*/
             } else {
                alert("erreur");
                alert(data);
             }
          }
       });
    }

    function EvoluProduitDate(date) {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeEvoluProduitdate:1,date:date},
          success:function(data){
             $('.listeEvolution').html(data);
          }
       });
    }

    // modifier produit
    function modifierProd(id,ref,desi,qte,pa,pv) {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{modifierProduit:1,id:id,ref:ref,desi:desi,qte:qte,pa:pa,pv:pv},
          success:function(data){
             if (data=="ok") {
                alert("Produit modifier avec succes");
                listeProduct();
                listeProductV();
                $('.modifProd').hide(1000);
                $('.frm-liste').show(1000);
             } else {
                alert(data);
             }
          }
       });
    }

    
    // valider la vente
    function validerLaVente(CMD){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{validerVente:1,CMD:CMD},
          success:function(data){
              alert("Vente effectuée avec succes")
              panier();
              listeProductV();
              NombreProduitPanier();
             
          }
       });
    }

     function supAppro(idapp){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{supAppro:1,idapp:idapp},
          success:function(data){
              alert(data);
             listeEvoluProduit();
             pageEvo();
          }
       });
    }

    function supProduit(idPr,refPr){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{supProduit:1,idPr:idPr,refPr:refPr},
          success:function(data){
             alert(data);
             listeProduct();
             page();
          }
       });
    }

    function venteParDate(date,usID){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{venteParDate:1,date:date,usID:usID},
          success:function(data){
              $('.rechDate').html(data);
             
          }
       });
    }

    function venteDeuxDates(d1,d2,usID){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{venteDeuxDates:1,d1:d1,d2:d2,usID:usID},
          success:function(data){
              $('.rechDeuxDates').html(data);
             
          }
       });
    }

    function venteTDates(d1,d2){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{venteTDates:1,d1:d1,d2:d2},
          success:function(data){
              $('.rechTDates').html(data);
             
          }
       });
    }

    function supCred(IDCRED){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{supCred:1,IDCRED:IDCRED},
          success:function(data){
             alert(data);
             listeCreanciers();
          }
       });
    }

    function validerLaVenteCred(CRED,piece,nom,tel){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{validerCredit:1,CRED:CRED,piece:piece,nom:nom,tel:tel},
          success:function(data){
              if (data==CRED+"ok") {
                 alert("Vente effectuée avec succes");
                 panier2();
                 listeProductCred();
                 NombreProduitPanier2();
              } else {
                  var resultat = data.split('*');
                  alert(resultat[1]);
              }   
          }
       });
    }

    function validerLaVenteCredAncien(CRED,piece){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{validerCreditAncien:1,CRED:CRED,piece:piece},
          success:function(data){
              if (data==CRED+"ok") {
                 alert("Vente effectuée avec succes");
                 panier2();
                 listeProductCred();
                 NombreProduitPanier2();
              } else {
                  var resultat = data.split('*');
                  alert(resultat[1]);
              }   
          }
       });
    }

    //VIDER LES CHAMP PRODUIT
    function viderChampsProduit(){
       $('#ref').val("");
       $('#design').val("");
       $('#qte').val("");
       $('#pa').val("");
       $('#pv').val("");
    }
    //liste des produit en stock
	  function listeProduct() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeProduit:1},
          success:function(data){
             $(".liste_product").html(data);
          }
       });
    }

    function listeEvoluProduit() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeEvoluProduit:1},
          success:function(data){
             $(".listeEvolution").html(data);
          }
       });
    }

    //select user
    function selectUser() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{selectUser:1},
          success:function(data){
             $(".selectUser").html(data);
          }
       });
    }

    function selectUser2() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{selectUser2:1},
          success:function(data){
             $(".selectUser2").html(data);
          }
       });
    }
    
    //liste produit en rupture de stock
    function listeProductRupture() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeProduitRupture:1},
          success:function(data){
             $(".liste_product_r").html(data);
          }
       });
    }

    function listeProductV() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeProduitV:1},
          success:function(data){
             $(".liste_product_v").html(data);
          }
       });
    }

    function listeProductCred() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeProduitCred:1},
          success:function(data){
             $(".liste_product_cred").html(data);
          }
       });
    }

    function listeCreanciers() {
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeCreancier:1},
          success:function(data){
             $(".listeCreanciers").html(data);
          }
       });
    }

    //affichage de la pagination agent
    function page(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {page:1},
          success:function(data){
             $(".pagination").html(data);
          }
      });
    }

    function pageV(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {pageV:1},
          success:function(data){
             $(".pagination2").html(data);
          }
      });
    }

    function pageCred(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {pageCred:1},
          success:function(data){
             $(".pagination4").html(data);
          }
      });
    }

    function pageCreance(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {pageCreance:1},
          success:function(data){
             $(".pagination5").html(data);
          }
      });
    }

    function pageEvo(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {pageEvo:1},
          success:function(data){
             $(".pagination6").html(data);
          }
      });
    }

    function Fermer(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {fermer:1},
          success:function(data){
             listeCreanciers();
             $('.crea').toggle();
             $('.impression').toggle();
          }
      });
    }

    function pageR(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {pageR:1},
          success:function(data){
             $(".pagination3").html(data);
          }
      });
    }

    //augmenter la quantité de produit
    function augmenterQte(id_prod,qte,qte_aug){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {augQte:1,id_prod:id_prod,qte:qte,qte_aug:qte_aug},
          success:function(data){
              if (data=="ok") {
                alert("Produit augmenté avec succes");
                window.location.href ='home.php?p=produits';
              }else{
                alert(data);
              }
          }
      });
    }

    function panier(){
        $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {panier1:1},
          success:function(data){
              $('.panier').html(data);
          }
      });
    }

    function panier2(){
        $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {panier2:1},
          success:function(data){
              $('.panier_cred').html(data);
          }
      });
    }

    function NombreProduitPanier(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {panier:1},
          success:function(data){
              $('.pan').html(data);
          }
      });
    }

    function NombreProduitPanier2(){
      $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {panier3:1},
          success:function(data){
              $('.pan2').html(data);
          }
      });
    }

    function ajouterPanier(ref,design,pu,qte){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {ajouterPanier:1,ref:ref,design:design,pu:pu,qte:qte},
          success:function(data){
            if (data=="ok") {
              listeProductV();
              panier();
              NombreProduitPanier();
            } else {
              alert(data);
            }
              
          }
      });
    }

    function ajouterPanierCred(ref,design,pu,qte){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {ajouterPanierCred:1,ref:ref,design:design,pu:pu,qte:qte},
          success:function(data){
            if (data=="ok") {
              listeProductCred();
              panier2();
              NombreProduitPanier2();
            } else {
              alert(data);
            }
              
          }
      });
    }

    //Augmenter la quantite du produit dans le panier
    function AugmenterQtePanier(ref,qte){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {augQtePanier:1,ref:ref,qte:qte},
          success:function(data){
            if (data=="non") {
              alert("Veuillez saisir un nombre superieur à zéro (0)");
            }else{ 
              panier();
              NombreProduitPanier();
              listeProductV();
            }
          }
      });
    }

    function AugmenterQtePanierCred(ref,qte){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {augQtePanierCred:1,ref:ref,qte:qte},
          success:function(data){
            if (data=="non") {
              alert("Veuillez saisir un nombre superieur à zéro (0)");
            }else{ 
              panier2();
              NombreProduitPanier2();
              listeProductCred();
            }
          }
      });
    }

    //diminuer la quantite du produit dans le panier
    function DiminuerQtePanier(ref,qte){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {DimQtePanier:1,ref:ref,qte:qte},
          success:function(data){
            if (data=="non") {
              alert("Veuillez saisir un nombre inferieur à la quantité");
            }else if (data=="nonnon") {
              alert("Veuillez saisir un nombre superieur à zéro (0)");
            }else{ 
              panier();
              NombreProduitPanier();
              listeProductV();
            }
          }
      });
    }

    function DiminuerQtePanierCred(ref,qte){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {DimQtePanierCred:1,ref:ref,qte:qte},
          success:function(data){
            if (data=="non") {
              alert("Veuillez saisir un nombre inferieur à la quantité");
            }else if (data=="nonnon") {
              alert("Veuillez saisir un nombre superieur à zéro (0)");
            }else{ 
              panier2();
              NombreProduitPanier2();
              listeProductCred();
            }
          }
      });
    }

    // retirer produit dans le panier
    function RetirerProduiPanier(ref){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {RetirerProduit:1,ref:ref},
          success:function(data){
              panier();
              listeProductV();
              NombreProduitPanier();   
          }
      });
    }

    function RetirerProduiPanierCred(ref){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {RetirerProduitCred:1,ref:ref},
          success:function(data){
              panier2();
              listeProductCred();
              NombreProduitPanier2();   
          }
      });
    }

    // vider le panier
    function viderPanier(){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {vider:1},
          success:function(data){
              panier();
              listeProductV();
              NombreProduitPanier();
              alert(data);   
          }
      });
    }

    function viderPanier2(){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data: {viderCred:1},
          success:function(data){
              panier2();
              listeProductCred();
              NombreProduitPanier2();
              alert(data);  
          }
      });
    }

    //recherche produit
    function rechercheProduit(search){
      if (search != '') {
            $.ajax({
              url:"actions/action.php", 
              method: "POST",
              data:{searchProduit:1,search:search},
              success:function(data){
                 $(".liste_product").html(data);
              }
            });
        }else{
            listeProduct();
        } 
    }

    //recherche produit pour vente
    function rechercheProduitV(search){
      if (search != '') {
            $.ajax({
              url:"actions/action.php", 
              method: "POST",
              data:{searchProduitV:1,search:search},
              success:function(data){
                 $(".liste_product_v").html(data);
              }
            });
        }else{

            listeProductV();
        } 
    }

    function rechercheProduitCred(search){
      if (search != '') {
            $.ajax({
              url:"actions/action.php", 
              method: "POST",
              data:{searchProduitCred:1,search:search},
              success:function(data){
                 $(".liste_product_cred").html(data);
              }
            });
        }else{

            listeProductCred();
        } 
    }

    function rechercheClientCred(search){
      if (search != '') {
            $.ajax({
              url:"actions/action.php", 
              method: "POST",
              data:{searchClientCred:1,search:search},
              success:function(data){
                 $(".listeCreanciers").html(data);
              }
            });
        }else{
            listeCreanciers();
        } 
    }

    function CMD(){
      $.ajax({
         url : "actions/action.php",
         method : "POST",
         data :{CMD:1},
         success:function(data){
            $('#CMD').val(data);
         }
      });
    }

    function CRED(){
      $.ajax({
         url : "actions/action.php",
         method : "POST",
         data :{CRED:1},
         success:function(data){
            $('#CRED').val(data);
         }
      });
    }

    function totalP(){
      $.ajax({
         url:"actions/action.php",
         method:"POST",
         data:{totalP:1},
         success:function(data){
           $(".tp").html(data);
         }
      });
    }

    // total produit en rupture
    function totalpR(){
      $.ajax({
         url:"actions/action.php",
         method:"POST",
         data:{totalpR:1},
         success:function(data){
           $(".tpR").html(data);
         }
      });
    }

    // valeur globale du stock
    function vg(){
      $.ajax({
         url:"actions/action.php",
         method:"POST",
         data:{vg:1},
         success:function(data){
           $(".vg").html(data);
         }
      });
    }

    function faireVersement(IDCRED,montant,nom){
      $.ajax({
         url:"actions/action.php",
         method:"POST",
         data:{vers:1,IDCRED:IDCRED,montant:montant,nom:nom},
         success:function(data){
          if (data=="ok") {
            $('.versement').toggle();
            $('.impression').toggle();
            $('.nomCli').html('Versement effectué pour '+nom);
            $('.fermer').html('Fermer');
            $('.imp').html('<a class="btn btn-danger btn-xs" href="etats/proformat3.php" target="_blank"><i class="fa fa-print"></i> Imprimer</a>');
            listeCreanciers();
          } else {
           alert(data); 
          }
           
         }
      });
    }

    function viderTs(){
      $('.rechDate').html('');
      $('.rechDeuxDates').html('');
      $('.rechTDates').html('');
    }

    function suppAgent(matAgent){
      $.ajax({
         url : "actions/action.php",
         data :{suppAgent:1,matAgent:matAgent},
         method : "POST",
         success:function(data){
          listeAgent(); 
          $('#liste_ag').show();  
          $('.pagination').show();  
          $('.suppAgent').hide();  
            alert(data);
         }
      });
    }

    function listeAgent(){
       $.ajax({
          url:"actions/action.php",
          method: "POST",
          data:{listeAgent:1},
          success:function(data){
             $("#liste_ag").html(data);
          }
       }) 
    }

    function ModifierAgent(nom,pre,tel,type,username,password,mat){
        $.ajax({
           url : "actions/action.php",
           data :{
                  ModifierAgent:1,
                  nom:nom,
                  pre:pre,
                  tel:tel,
                  type:type,
                  username:username,
                  password:password,
                  mat:mat
            },
           method : "POST",
           success:function(data){
                 if (data=="ok") {
                     alert("Employé modifié avec succes");
                     $('.frmodAgent').hide();
                     $('.ok').hide();
                 } else {
                    alert(data);
                 }

            }
        });
      }

    function FormulaireDetailAgent(matAgent){
      $.ajax({
         url : "actions/action.php",
         data :{detailAg:1,matAgent:matAgent},
         method : "POST",
         success:function(data){
              $('.frmodAgent').html(data);
         }
      });
    }

    function ajoutAgent(nom,pre,tel,username,password,type){
      $.ajax({
         url : "actions/action.php",
         data :{ajoutAgent:1,nom:nom,pre:pre,tel:tel,type:type,username:username,password:password},
         method : "POST",
         success:function(data){

            $('.msgAgent').html(data);

         }
      });
    }

    function viderAgent() {
      $('#nom').val('');
      $('#pre').val('');
      $('#tel').val('');
      $('#serv').val('');
      $('#username').val('');
      $('#password').val('');
      $('.msgAgent').html('');
    }
	 

});