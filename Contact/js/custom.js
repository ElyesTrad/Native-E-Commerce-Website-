/*global $, alert, console */

$(function() {
    'use strict';

    var userErrors=true ,
        emailErrors=true,
        cellErrors=true,
        msgErrors=true ;
    
    $('#username').blur(function() {
        if($(this).val().length<4){ //show errors
            $(this).css('border','1px solid #F00').parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(100);
            userErrors=true;


        }
        else { // no errors
            $(this).css('border','1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(100);
            userErrors=false;
        }
    });

    $('#email').blur(function() {
        if($(this).val() === ''){
            $(this).css('border','1px solid #F00').parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(100);
            emailErrors=true;


        }
        else {
            $(this).css('border','1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(100);
            emailErrors=false;
        }
        
    });

    $('#cell').blur(function() {
        if($(this).val().length<8){
            $(this).css('border','1px solid #F00').parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(100);
            cellErrors=true;


        }
        else {
            $(this).css('border','1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(100);
            cellErrors=false;
        }
        
    });

    $('#message').blur(function() {
        if($(this).val().length<10){
            $(this).css('border','1px solid #F00').parent().find('.custom-alert').fadeIn(200);
            msgErrors=true;

        }
        else {
            $(this).css('border','1px solid #080').parent().find('.custom-alert').fadeOut(200);
            msgErrors=false;
           
        }
        
    });

    // Button yemchi kan maykounou lkol s7aa7

    $('.contact-form').submit(function(e){
        if(userErrors === true|| emailErrors===true||msgErrors===true|| cellErrors===true){
            e.preventDefault();
            $('#username, #email, #cell, #message').blur();
        }
    })



}); 


