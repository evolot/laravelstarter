<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
  <!-- Favicon-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  {{--<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext"--}}
  {{--rel="stylesheet" type="text/css">--}}
  {{--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"--}}
  {{--type="text/css">--}}
  <link href="https://cdn.bootcss.com/material-design-icons/3.0.1/iconfont/material-icons.min.css"
        rel="stylesheet">

  <!-- Bootstrap Core Css -->
  {{--<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">--}}
  <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
  <!-- Waves Effect Css -->
  <link href="{{asset('/css/admin/waves.css')}}" rel="stylesheet"/>

  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Animation Css -->
  <link href="{{asset('/css/admin/animate.css')}}" rel="stylesheet"/>

  <!-- Morris Chart Css-->
  <link href="{{asset('/css/admin/morris.css')}}" rel="stylesheet"/>

  <!-- Custom Css -->
  <link href="{{asset('/css/admin/main.css')}}" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="{{asset('/css/admin/all-themes.css')}}" rel="stylesheet"/>

  @section('style')
  @show
</head>

@include('admin.components.searchbar.searchbar')
@include('admin.components.navbar.navbar')
@include('admin.components.sidebar.sidebar')
@section('content')
@show

<!-- Jquery Core Js -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
{{--<script src="plugins/jquery/jquery.min.js"></script>--}}

<!-- Bootstrap Core Js -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<script src="plugins/bootstrap/js/bootstrap.js"></script>--}}

<!-- Select Plugin Js -->
{{--<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>--}}

<!-- Slimscroll Plugin Js -->
<script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.0/jquery.slimscroll.min.js"></script>
{{--<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>--}}

<!-- Waves Effect Plugin Js -->
<script src="{{url('/js/admin/plugins/waves.min.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{url('/js/admin/plugins/jquery.countTo.js')}}"></script>

{{--<!-- Morris Plugin Js -->--}}
{{--<script src="plugins/raphael/raphael.min.js"></script>--}}
{{--<script src="plugins/morrisjs/morris.js"></script>--}}


<!-- Sparkline Chart Plugin Js -->
{{--<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>--}}

<!-- Custom Js -->
<script src="{{asset('/js/admin/admin.js')}}"></script>
<script src="{{asset('/js/admin/pages/index.js')}}"></script>

<!-- sweetalert Js -->
<link href="https://cdn.bootcss.com/sweetalert/1.1.2/sweetalert.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/sweetalert/1.1.2/sweetalert.min.js"></script>

<!-- toastr Js -->
<link href="https://cdn.bootcss.com/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/toastr.js/2.1.4/toastr.css" rel="stylesheet">

<!-- Demo Js -->
<script src="{{asset('js/admin/demo.js')}}"></script>

<script src="https://cdn.bootcss.com/socket.io/2.1.0/socket.io.js"></script>
<script src="{{asset('js/echocompiled.js')}}"></script>
@section('js')
  <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      @auth
          window.Echo = new Echo({
          broadcaster: 'socket.io',
          // host: 'https://www.zixuebei.com:6001',
          host: '{{env('APP_ENV')=='local'?url('/').':6001':secure_url('/').':6001'}}',
      });

      Echo.join(`public`)
          .here((users) => {

          })
          .joining((user) => {
              console.log(user.name);
          })
          .leaving((user) => {
              console.log(user.name);
          });

      window.Echo.private(`App.User.{{Auth::id()}}`) // 私有频道
          .listen('NewMessage', (e) => {
              console.log(e)
              const myid = {{Auth::id()}}
                  liid = 'user-' + e.id

              if (myid < e.id) {
                  var largeId = e.id
                  var smallId = myid
              } else {
                  var largeId = myid
                  var smallId = e.id
              }

              var group = smallId + ':' + largeId

              var data = e.message

              if (localStorage[group]) {
                  var localContent = JSON.parse(localStorage[group]);
              } else {
                  var localContent = []
              }


              localContent.push({
                  'time': new Date().toLocaleString(),//时间
                  'data': data,//文本、emoji（符号）、图片（url）、文件(url)数据
                  'self': 0,//谁发的 自己发的1 收到的0


              });
              localStorage[group] = JSON.stringify(localContent);//存储本地；


              // message.id=e.message
              // console.log(message)

              li = document.getElementById(liid);


              $(li).parents('li').remove()


              nli = '<li>' +
                  '              <div class="liLeft"><img src="' + e.avatar + '" style="height: 40px;width: 40px;"/>' +
                  '              </div>' +
                  '              <div class="liRight">' +
                  '                <span class="intername">' + e.name + '</span>' +
                  '                <span class="infor">' + e.message + '</span>' +
                  '                <span class="id" id="user-' + e.id + '"' +
                  '                      style="display: none">' + e.id + '</span>' +
                  '              </div>' +
                  '<span class="badge badge-important" >1</span>'
              '            </li>'

              $('.contact-list').prepend(nli)


              let answer = '';
              answer += '<li>' +
                  '<div class="answerHead"><img src="' + e.avatar + '"/></div>' +
                  '<div class="answers">' + e.message + '</div>' +
                  '</li>';
              var curId = $('.headId').text()
              if (e.id == curId) {
                  $('.newsList').append(answer);

                  // $('.headName').text(e.name);
                  // $('.headId').text(e.id);
                  $('.RightCont').scrollTop($('.RightCont')[0].scrollHeight);

              }

              console.log($('.headName').text())


          });


      //message

      //点击联系人切换聊天窗口
      $('.conLeft').on('click', 'li', function () {
          //选定联系人 改变联系人列表背景色 未读消息数量 置零
          console.log('1')

          $(this).addClass('bg').siblings().removeClass('bg');
          $(this).children('.badge').text('0');
          $(this).children('.badge').css('display', 'none');

          //改变对话框联系人 名称 头像
          var intername = $(this).children('.liRight').children('.intername').text();
          var id = $(this).children('.liRight').children('.id').text();
          $('.headName').text(intername);
          $('.headId').text(id);


          $(".newsList").html('');
          console.log($(".newsList").html())

          //读取聊天记录并渲染

          const myid =
        {{Auth::id()}}


        if (myid < id) {
            var largeId = id
            var smallId = myid
        } else {
            var largeId = myid
            var smallId = id
        }

          var group = smallId + ':' + largeId

          console.log(group)

          if (localStorage[group]) {
              var localContent = JSON.parse(localStorage[group]);
          } else {
              // console.log(localContent)
          }


          $(localContent).each(function (key, obj) {

              var domstring = renderRecords(obj);//获取对应的聊天模板
              $(".newsList").append(domstring);//展示聊天信息

          });


          $('.RightCont').scrollTop($('.RightCont')[0].scrollHeight);

      })


      //渲染聊天记录
      function renderRecords(obj) {
          const myavatar = $('#headImg').attr('src')
          const companyavatar = $('.bg').find('img').attr('src')
          if (obj.self == 0) {
              let answer = '';
              answer += '<li>' +
                  '<div class="answerHead"><img src="' + companyavatar + '"/></div>' +
                  '<div class="answers">' + obj.data + '</div>' +
                  '</li>';
              return answer;
          } else {
              var str = '';
              str += '<li>' +
                  '<div class="nesHead"><img src=' + myavatar + '/></div>' +
                  '<div class="news">' + obj.data + '</div>' +
                  '</li>';
              return str
          }
      }

      //发送消息
      $('.sendBtn').click(function () {

          let news = $('#dope').val().trim();
          if (news == '') return;
          let id = $('.headId').text();

          const myid =
            {{Auth::id()}}

          const companyid = $('.headId').text()
          if (myid < companyid) {
              var largeId = companyid
              var smallId = myid
          } else {
              var largeId = myid
              var smallId = companyid
          }

          var group = smallId + ':' + largeId

          var data = news

          if (localStorage[group]) {
              var localContent = JSON.parse(localStorage[group]);
          } else {
              var localContent = []
          }


          localContent.push({
              'time': new Date().toLocaleString(),//时间
              'data': data,//文本、emoji（符号）、图片（url）、文件(url)数据
              'self': 1,//谁发的 自己发的1 收到的0


          });
          localStorage[group] = JSON.stringify(localContent);//存储本地；


          console.log(news)

          $.post("{{env('APP_ENV')=='local'?url('/message'):secure_url('/message')}}", {
                  '_method': 'post',
                  'id': id,
                  'message': news
              },
              function (data) {
                  let avatar = $('#headImg').attr('src')
                  console.log(avatar)

                  if (data.status == 1) {
                      console.log(data)
                      $('#dope').val('');

                      var str = '';
                      str += '<li>' +
                          '<div class="nesHead"><img src="' + avatar + '"/></div>' +
                          '<div class="news">' + news + '</div>' +
                          '</li>';
                      $('.newsList').append(str);
                      $('.conLeft').find('li.bg').children('.liRight').children('.infor').text(news);
                      $('.RightCont').scrollTop($('.RightCont')[0].scrollHeight);


                  } else {
                      console.log(data)
                  }


              });

      })


      $('.qqboxclose').on('click', function () {
          $('.qqBox').hide()
          $('.overlay').hide()
      })

      $('.qqshow').on('click', function () {
          $('.qqBox').toggle()
          $('.overlay').toggle()
      })


    @endauth
  </script>
@show
</html>