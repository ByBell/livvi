$('#cd-navigation li').click(function(){
    $('.nav-trigger').click();
});


var index ;

$(function() {
   index = $('#contenu').html() ;
});

$("#mdp").keypress(function(event) {
  if (event.which == 13) {
   connexion() ;
  }
});

function change(id) {
    $.ajax({
        url     : 'traitement.php',
        type    : 'post' ,
        data    : {modifDate : true,
                   id : id ,
                  titre : $('#titre').val() ,
                  description : $('#description').val() ,
                  couleur : $('#couleur').val() ,
                  logo : $("input[name='logo']:checked").val(),
                  date : $('#date').val(),
                  pos : $('#position').val()} ,
        dataType : 'html',
        success : function(res){
            $('#btimeline').click() ;
            //$('.titre > h1').html(res) ;
        }
    });
}

function modif(id) {
    $.ajax({
        url     : 'add.php',
        type    : 'post' ,
        data    : {idModif : id} ,
        dataType : 'html',
        success : function(res){
            $('#contenu').html(res) ;
            $('#cd-navigation > li > a').removeClass('active') ;
        }
    });
}

function supprimer(id, titre) {
    //confirm("Confirmez-vous la suppression de cette image : '"+titre+"' ?") ;
    if (confirm("Confirmez-vous la suppression de cette image : '"+titre+"' ?")) {
        $.ajax({
            url     : 'traitement.php',
            type    : 'post' ,
            data    : {idSupp : id} ,
            dataType : 'html',
            success : function(res){
                $('#btimeline').click() ;
            }
        });
    }
    else {

    }
}

function prevlogo() {
    $('#preview-logo').attr('src','img/icon/cd-icon-'+$("input[name='logo']:checked").val()+'.svg') ;
}

function prevtitre () {
    $('#preview-titre').html($('#titre').val());
}

function prevdescription () {
    $('#preview-description').html($('#description').val());
}

function prevdate () {
    $('#preview-date').html($('#date').val());
}

function prevcouleur () {
    $('#preview-couleur').removeClass('cd-rouge cd-vert cd-jaune');
    $('#preview-couleur').addClass('cd-'+$('#couleur').val());
}

function up() {
    $.ajax({
        url     : 'traitement.php',
        type    : 'post' ,
        data    : {addDate : true,
                  titre : $('#titre').val() ,
                  description : $('#description').val() ,
                  couleur : $('#couleur').val() ,
                  logo : $("input[name='logo']:checked").val(),
                  date : $('#date').val(),
                  pos : $('#position').val()} ,
        dataType : 'html',
        success : function(res){
            $('#btimeline').click() ;
        }
    });
}

function connexion() {
    $.ajax({
        url     : 'traitement.php',
        type    : 'post' ,
        data    : {password : $('#mdp').val()} ,
        dataType : 'html',
        success : function(res){
            $('#bouton-admin').html(res);
            $('#btimeline').click() ;
        }
    });
}

function deconnexion() {
    $.ajax({
        url     : 'traitement.php',
        type    : 'post' ,
        data    : {deconnexion : true} ,
        dataType : 'html',
        success : function(res){
            $('#bouton-admin').html(res) ;
            $('#baccueil').click() ;
        }
    });
}

function add() {
    $.ajax({
        url     : 'add.php',
        dataType : 'html',
        success : function(res){
            $('#contenu').html(res) ;
            $('#cd-navigation > li > a').removeClass('active') ;
        }
    });
}

function bcontact() {
    $.ajax({
        url     : 'contact.html',
        dataType : 'html',
        success : function(res){
            $('#contenu').html(res) ;
            $('#cd-navigation > li > a').removeClass('active') ;
            $('#bcontact > a').addClass('active');
        }
    });
}

$('#btelechargement').click(function() {
    $.ajax({
        url     : 'telechargement.html',
        dataType : 'html',
        success : function(res){
            $('#contenu').html(res) ;
            $('#cd-navigation > li > a').removeClass('active') ;
            $('#btelechargement > a').addClass('active');
        }
    });
});

function btimeline() {
    $.ajax({
        url     : 'timeline.php',
        dataType : 'html',
        success : function(res){
            $('#contenu').html(res) ;
            $('#cd-navigation > li > a').removeClass('active') ;
            $('#btimeline > a').addClass('active');


            var $element_anime = $('.cd-timeline-block');
            var $fenetre = $(window);

            $fenetre.on('scroll resize', dansFenetre);

            $fenetre.trigger('scroll');

            function dansFenetre() {
              var hauteur_fenetre = $fenetre.height();
              var posHautFenetre = $fenetre.scrollTop();
              var posBasFenetre = (posHautFenetre + hauteur_fenetre);
              //console.log(posBasFenetre+" et "+ posHautFenetre)

              $.each($element_anime, function() {
                var $element = $(this);
                var element_hauteur = $element.outerHeight();
                var element_haut_pos = $element.offset().top;
                var element_bas_pos = (element_haut_pos + element_hauteur);

                //verifier si element est dans le view port
                if ((element_bas_pos >= posHautFenetre) &&
                    (element_haut_pos <= posBasFenetre)) {
                  $element.addClass('dansFenetre');
                } else {
                  $element.removeClass('dansFenetre');
                }
              });
            }



        }
    });
}
function baccueil() {
    $('#contenu').html(index) ;
    $('#cd-navigation > li > a').removeClass('active') ;
    $('#baccueil > a').addClass('active');
}

jQuery(document).ready(function($) {
    $('.transition-souris').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
				$('.transition-souris').removeClass('active');
				$(this).addClass('active');
        $('html, body').animate({
            scrollTop: ($(page).offset().top) - 70
        }, speed); // Go
        return false;
    });


    var mainHeader = $('.cd-auto-hide-header'),
        secondaryNavigation = $('.cd-secondary-nav'),
        //this applies only if secondary nav is below intro section
        belowNavHeroContent = $('.sub-nav-hero'),
        headerHeight = mainHeader.height();

    //set scrolling variables
    var scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150;

    mainHeader.on('click', '.nav-trigger', function(event) {
        // open primary navigation on mobile
        event.preventDefault();
        mainHeader.toggleClass('nav-open');
    });

    $(window).on('scroll', function() {
        if (!scrolling) {
            scrolling = true;
            (!window.requestAnimationFrame) ?
            setTimeout(autoHideHeader, 250): requestAnimationFrame(autoHideHeader);
        }
    });

    $(window).on('resize', function() {
        headerHeight = mainHeader.height();
    });

    function autoHideHeader() {
        var currentTop = $(window).scrollTop();

        (belowNavHeroContent.length > 0) ?
        checkStickyNavigation(currentTop) // secondary navigation below intro
            : checkSimpleNavigation(currentTop);

        previousTop = currentTop;
        scrolling = false;
    }

    function checkSimpleNavigation(currentTop) {
        //there's no secondary nav or secondary nav is below primary nav
        if (previousTop - currentTop > scrollDelta) {
            //if scrolling up...
            mainHeader.removeClass('is-hidden');
        } else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            //if scrolling down...
            mainHeader.addClass('is-hidden');
        }
    }

    function checkStickyNavigation(currentTop) {
        //secondary nav below intro section - sticky secondary nav
        var secondaryNavOffsetTop = belowNavHeroContent.offset().top - secondaryNavigation.height() - mainHeader.height();

        if (previousTop >= currentTop) {
            //if scrolling up...
            if (currentTop < secondaryNavOffsetTop) {
                //secondary nav is not fixed
                mainHeader.removeClass('is-hidden');
                secondaryNavigation.removeClass('fixed slide-up');
                belowNavHeroContent.removeClass('secondary-nav-fixed');
            } else if (previousTop - currentTop > scrollDelta) {
                //secondary nav is fixed
                mainHeader.removeClass('is-hidden');
                secondaryNavigation.removeClass('slide-up').addClass('fixed');
                belowNavHeroContent.addClass('secondary-nav-fixed');
            }

        } else {
            //if scrolling down...
            if (currentTop > secondaryNavOffsetTop + scrollOffset) {
                //hide primary nav
                mainHeader.addClass('is-hidden');
                secondaryNavigation.addClass('fixed slide-up');
                belowNavHeroContent.addClass('secondary-nav-fixed');
            } else if (currentTop > secondaryNavOffsetTop) {
                //once the secondary nav is fixed, do not hide primary nav if you haven't scrolled more than scrollOffset
                mainHeader.removeClass('is-hidden');
                secondaryNavigation.addClass('fixed').removeClass('slide-up');
                belowNavHeroContent.addClass('secondary-nav-fixed');
            }

        }
    }


});
