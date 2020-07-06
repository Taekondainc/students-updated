$(document).ready(function() {
  $("#cht").click(function() {
  $(".Chat").toggle();
  $(".groups").hide();
   $(".lecturers").hide();
   $(".messagess").hide();
  $(".form-inner2").hide();
  $(".form-inner").show();
  });
  $("#ltr").click(function () {
  $(".Chat").hide();
  $(".groups").hide();
  $(".lecturers").toggle();
  $(".messagess").hide();
 $(".form-inner2").hide();
 $(".form-inner").show();
  });
  $("#grp").click(function () {
 $(".Chat").hide();
 $(".groups").toggle();
 $(".lecturers").hide();
 $(".messagess").hide();
  });
    $("#clm").click(function () {
 $(".Chat").hide();
 $(".groups").hide();
 $(".lecturers").hide();
 $(".messagess").toggle();
 $(".form-inner2").hide();
 $(".form-inner").show();
    });

  $.ajax({
      type: 'get',
      url: "/lecturers",
      data: 'success',
      success: function (data) {

          $(".ltc-c").html(data);

      },
      error: function (data) {
          console.log('Failed');
          console.log(data);
      }
  });


    $.ajax({
        type: 'get',
        url: "/classmates",
        data: 'success',
        success: function (data) {

            $(".cmssg").html(data);

        },
        error: function (data) {
            console.log('Failed');
            console.log(data);
        }
    });

  $('body').on('click', '.nav-link',function (e) {
        //  alert("hello");
      var contentid=$(this).attr("id");
       var contentd = $(this).attr("name");
         $("#hj").text(contentd);
      console.log(contentid);
     $("#name").text(contentid);

    $("#respondent").attr("value",contentid);
 $.ajax({
     type: 'get',
     url: "/messagecontent/"+contentid,
     data: 'success',
     success: function (data) {

         $(".messcont").html(data);

     },
     error: function (data) {
         console.log('Failed');
         console.log(data);
     }
 });



 });

    $('body').on('click', '.nav-li', function (e) {
        //  alert("hello");
        var contenttid = $(this).attr("href");
        var contentd = $(this).attr("id");
        var contenth = $(this).attr("name");
        //  console.log(contentd);
      //  $("#hj").text(contenth);
        //   console.log(contenttid);
        $("#name").text(contenttid);

     //   $("#respondent").attr("value", contentd);
        $.ajax({
            type: 'get',
            url: "/s" + contenttid,
            data: 'success',
            success: function (data) {

                $(".contlm").html(data);

            },
            error: function (data) {
                console.log('Failed');
                console.log(data);
            }
        });
    });
    $('body').on('click', '.nav-lin', function (e) {

     //  alert("hello");
        var contenttid = $(this).attr("href");
        var contentd = $(this).attr("id");
        var contenth = $(this).attr("name");
        //  console.log(contentd);
        $("#hj").text(contenth);
        //   console.log(contenttid);
        $("#name").text(contenttid);
         setInterval(function stoptoggle() {
            $.ajax({
                type: 'get',
                url: "/c" + contenttid,
                data: 'success',
                success: function (data) {

                    $(".messcont").html(data);

                },
                error: function (data) {
                    console.log('Failed');
                    console.log(data);
                }
            });

        }, 15000);
      $("#respondent").attr("value", contentd);
        $.ajax({
            type: 'get',
            url: "/c" + contenttid,
            data: 'success',
            success: function (data) {

                $(".messcont").html(data);

            },
            error: function (data) {
                console.log('Failed');
                console.log(data);
            }
        }); clearInterval(stoptoggle());

    });
 $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });
 $(" #mess ").submit(function (e) {
             e.preventDefault();

             var formData = new FormData(this);

             $.ajax({
                 type: 'POST',
                 url: '/message',
                 data: formData,
                 cache: false,
                 contentType: false,
                 processData: false,
                 success: (data) => {

                 $(".messcont").html(data);

                 },
                 error: function (data) {
                     console.log(data);
                 }
             });
             });
  $("#messagesearch").keyup(function () {

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      var td = $(this).val();
      $.ajax({
          type: "get",
          url: "/messagesearch/" + td,
          cache: false,
          success: function (data) {

              $(".persons").html(data);

          }
      });

  });
   $("#create-group").keyup(function () {

       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });

       var td = $(this).val();
       $.ajax({
           type: "get",
           url: "/messagegroup/" + td,
           cache: false,
           success: function (data) {

               $(".conmessage").html(data);

           }
       });

   });
    $('body').on('click', '#grpm', function (e) {
e.preventDefault();
         $("#div").show();


          //  alert("hello");
                 var contenttid = $(this).attr("href");
            $(".groupcontainer").hide();
            $(".int").remove();
            $(".colcontainer").append(
'<div><input type="text" name="member" value="' + contenttid + '" id="input_sub3" class="int" style="background:white;color:black;text-align:center;"></div>'

                    );

});
$("#cancel").click(function(){
   $("#div").hide();
   $(".groupcontainer").show();
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(" #groupform ").submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url: '/creategroup',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
 $("#alerg").show();
            $("#alerg").html(data);
             $("#alerg").fadeOut(3000);
        },
        error: function (data) {
            console.log(data);
        }
    });
});
  $.ajax({
      type: "get",
      url: "/mgroup",
      cache: false,
      success: function (data) {

          $("#groupscontainer").html(data);

      }
  });
   $('body').on('click', '.Groupmem', function (e) {
       e.preventDefault();
       $(".form-inner2").show();
       $(".form-inner").hide();

       //  alert("hello");
       var contenttid = $(this).attr("href");
        var contentid = $(this).attr("name");
      $("#hj").text(contenttid);
      $("#respondent1").attr("value", contentid);
       var td =contentid;
       $.ajax({
       type: "get",
       url: "/mssgp/" + td,
       cache: false,
       success: function (data) {

           $(".messcont").html(data);

       }
       });

     setInterval(function stoptoggle() {
         $.ajax({
             type: "get",
             url: "/mssgp/" + td,
             cache: false,
             success: function (data) {

                 $(".messcont").html(data);

             }
         });


   },15000);
   });

   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
   $(" #mess1 ").submit(function (e) {
       e.preventDefault();

       var formData = new FormData(this);

       $.ajax({
           type: 'POST',
           url: '/creategroupmessage',
           data: formData,
           cache: false,
           contentType: false,
           processData: false,
           success: (data) => {
               $(".messcont").html(data);
           },
           error: function (data) {
               console.log(data);
           }
       });
   });
});
