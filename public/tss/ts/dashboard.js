$(document).ready(function(){
    $("#hm_bg").click(function(){
      $("#display_content").css("width", "100%");
      $("#content_container-div").toggle();
      $("body").css("width", "100%");
    ///   $('').toggleClass('show');
    // $(".ccv").toggle('show');
     $(".ccv").show("slow");
$(".ccv").css("left","0px");
$("#content_container-div").css("left", "0px");
      // $(".ccv").css("transition", " left .3 s ease out");
      $(".ccv").show("slow"); $(".fixed-top").css("width", "100%");
     // $("#side_menu").hide();
      $("#hm_bg").hide()
      $("#hm_bg2").show();
   // //  $("body").animate({
   //       left: '250px'
    //  })

    });
  });
  $(document).ready(function () {


      $("#close2").click(function () {
          $("#hytt").hide();
      });
  });
   $(document).ready(function () {


       $("#close3").click(function () {
           $("#content_container-div").hide();
           $("body").css("width", "100%");
           $("nav").css("width", "100%");
       });
   });
$(document).ready(function () {
  $("#hm_bg2").click(function () {
    $("#display_content").css("width", "100%");
    $("#content_container-div").toggle();
    $("body").css("width", "85%");
    ///   $('').toggleClass('show');
    // $(".ccv").toggle('show');
    $(".ccv").show("slow");
    $(".ccv").css("left", "0px");
    $("#content_container-div").css("left", "0px");
    // $(".ccv").css("transition", " left .3 s ease out");
    $(".ccv").show("slow"); $(".fixed-top").css("width", "85%");
    // $("#side_menu").hide();
    $("#hm_bg2").hide()
    $("#hm_bg").show();
    // //  $("body").animate({
    //       left: '250px'
    //  })

  });
});

//$(document).ready(function () {
//  $("#spn_").click(function () {
 //   $("#display_content").css("width", "100%");
 //   $("#content_container-div").show();
 //   $("#side_menu").hide();
  //  $("body").css("width", "100%");
  //  $(".fixed-top").css("width", "100%");



 // });
  //alert(window.location);
  //if (window.location == 'http://localhost:8000/home') {
  //     $("t").show();
 //$("#tg").hide();
 // }
  //else{
   //   $("#tg").show();
  //    $("t").hide();
 // }
//});


$(document).ready(function () {


  //$.ajax({
  //    url: 'https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=4dbc17e007ab436fb66416009dfb59a8',
 //     method: "GET",
 //     type: "JSON",
 //     data: JSON.stringify(),
 //     success: function (data) {
 //       $('.apii').html(JSON.stringify(data), 2)
  //    }
 // });




});

$(document).ready(function () {

    // $("#Search").keyup(function(e){
    //var num=e.target.value;
    //console.log(num);
    // $.ajax({
  //       url: "http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3",
    //     method: "GET",
   //      dataType: "json",
       //  success: function (data) {
   //      // alert(JSON.stringify(data.title,undefined));
     //    }
   //  });
 // $.ajax({
  //    url: "http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3",
  //    method: "GET",
  //    dataType: "json",
  //    data:"json" ,
  //   success: function (data) {
   //       //alert(data);
         // console.log(data);
  //         $('.apii').html(data);
  //    }
 // });
 //  $.ajax({
   //    type: "GET",
  //     url: 'http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3',
   //    data: 'json',
//
   //    success: function (data) {
   //      $.each(data,function(i,item){
  // $('.apii').text(item.title);
   //      });

   //    }
  // });
});


 // $(document).ready(function(){//
  //  $("#spn_").click(function () {
  //   $("body").css("width", "100%");
  //   $("#side_menu").show();
 //     $("#display_content").css("width", "600px");
  //    $("#content_container-div").fadeOut(1000);
 //     $(".ccv").hide("slow");
 //     $(".ccv").css("@keyframes example", " from {transform: transition(3 em, 0)}to {transform: transition(0, 0)}");

//$(".ccv").hide();
//$(".ccv").css("left", "-200px");
   // });
    //$(".ccv").mouseleave(function(){
    //  $("body").css("width", "auto");
    //  $("#side_menu").show();
    //  $("#display_content").css("width", "600px");
    //  $("#content_container-div").fadeOut(1000);

  // });

  //});

  $(document).ready(function () {
$("#drop").mouseover(function () {
  $(".dropcontent1").show();
  $(".dropcontent1").css("display","inline-block");
  //$("#drop").css("background", "rgba(119, 183, 236, 0.63)");
 });
 });
   $("#drop").click(function () {
       $(".dropcontent1").toggle();
   });
  $(document).ready(function () {
      $("#drop").mouseleave(function () {
          $(".dropcontent1").hide();
      });
  })
  $(document).ready(function () {
      $("#logo").mouseover(function () {
          $(".dropcontent2").show();
          $(".dropcontent2").css("display", "inline-block");
      });
  });
   $("#logo").click(function () {
       $(".dropcontent2").toggle();
   });

    $(document).ready(function () {
        $("#classroom").mouseover(function () {
            $(".cvdd").show();
          $(".cvdd").css("display", "inline-block");
        });
    });
     $("#classroom").click(function () {
         $(".cvdd").toggle();
     });

   $(document).ready(function () {
       $("#llp").mouseover(function () {
           $(".dropcontent3").show();
           $(".dropcontent3").css("display", "inline-block");
       });
   });
 $("#llp").click(function () {
    $(".dropcontent3").toggle();
 });
    $(document).ready(function () {
        $("#llp").mouseleave(function () {
            $(".dropcontent3").hide();
        });
    });
 $(document).ready(function () {
     $("#logo").mouseleave(function () {
         $(".dropcontent2").hide();
     });
 });
$(document).ready(function () {
    $("#classroom").mouseleave(function () {
        $(".cvdd").hide();
    });
});

              $(document).ready(function () {


   $("#scl").keyup(function () {

   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   var td = $(this).val();
   $.ajax({
       type: "get",
       url: "/search3/" + td,
       cache: false,
       success: function (data) {
 $(".did").show(100);
 $(".did").css("display","inline-block;");
        $(".fol").html(data);

       }
   });

   });




    });
$(document).ready(function () {
    $('#ppl').submit(function (e) {
                e.preventDefault();
                 });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$('body').on('click', '.cancel', function (e) {
            e.preventDefault();
 $(".con").hide();
 });
    $('body').on('click', '.input-group-text', function (e) {
        e.preventDefault();
        var t = $(this).attr("class");
        $(".con").show(100);
     // $var=
      // $.ajax({
      //     type: "get",
       //    url: "/search3/" + td,
        //   cache: false,
        //   success: function (data) {
            //   $(".did").show(100);
          //     $(".did").css("display", "inline-block;");
       //        $(".did").html(data);
//
     //      }
     //  });



    });


       $('#reg').submit(function (e) {
           e.preventDefault();

           var formData = new FormData(this);

           $.ajax({
               type: 'POST',
               url: '/reg',
               data: formData,
               cache: false,
               contentType: false,
               processData: false,
               success: (data) => {

                   $("#ale").html(data);
               },
               error: function (data) {
                   console.log(data);
               }
           });
       });
});
