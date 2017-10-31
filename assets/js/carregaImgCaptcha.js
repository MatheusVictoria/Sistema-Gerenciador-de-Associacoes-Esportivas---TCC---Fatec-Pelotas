/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



//$(function () { 
//
//    var base_url = '<? echo base_url() ?>';
//
//          $('#refresh').on('click', function () { 
//                     $('#igmCaptcha').load(base_url + "Home/geraCaptcha"); 
//          }); 
// }); 
$(document).ready(function(){
    $("#refresh").click(function(){
    $("#conteudo").load("<?=base_url(Home/geraCaptcha)?>");
    });  
});