<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue.JS Tutorial</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>
    <div id="app3">
      <h1> @{{ message }} </h1>
      <h1 v-text="texte"></h1>
      <h1 v-show="viewed">this is the viewed attribute</h1>
      <h1 v-if="ifstate">this is the ifstate attribute</h1>
      <h1 v-else>this is Not the ifstate attribute</h1>
      <h1 v-pre>@{{ message }} </h1>
      <h1 v-once>@{{ message }} </h1>
      <h1 v-cloack>@{{ message }} </h1><!-- hide the element until the page is fully rendered-->
    </div>
    <div id="app4">
      <h6 v-bind:title="title"> @{{ message4 }} </h6>
      <img :src="url" v-bind:alt="title"><!-- Represent v-bind:src by only :src -->
    </div>
    <div id="app5">
      <h2>@{{ message5 }}</h2>
      <ul>
        <li v-for="todo in todos">@{{ todo.text }}</li>
      </ul>
    </div>
    <div id="app6">
      <h2>@{{ message6 }}</h2>
      <input type="text" v-model="message6">
    </div>
    <div id="app7">
      <h2>Count: @{{ count }}</h2>
      <input type="text" v-model="message7">
      <button v-on:click="coutUp" class="btn btn-xs btn-primary"type="button" name="button">Count up </button>
      <button @click="coutDown" class="btn btn-xs btn-danger"type="button" name="button">Count down </button> <!-- replace v-on: with @ -->
    </div>
  </body>

  <script src="https://unpkg.com/vue@2.3.3"></script>
  <script>
    var app = new Vue({
      el: '#app3',
      data: {
        message: 'the message is written in here',
        texte: 'brother',
        viewed: true,
        ifstate:true,
      }
    })
    var app = new Vue({
      el: '#app4',
      data: {
        message4: 'Hello world number four',
        title: "You loaded the page on"+ new Date(),
        url: "http://vuejs.org/images/logo.png",
      }
    })
    var app = new Vue({
      el: '#app5',
      data: {
        message5: 'Hello world number four',
        todos:[
          {text: 'Learn Vue'},
          {text: 'Like the video'},
          {text: 'share the video'}
        ]
      }
    })
    var app = new Vue({
      el: '#app6',
      data: {
        message6: 'Hello world number six',
      }
    })
    var app = new Vue({
      el: '#app7',
      data: {
        message7: 'Hello world number seven',
        count:0,
      },
      methods: {
        coutUp: function(){
          this.count +=1
        },
        coutDown: function(){
          this.count -=1
        }
      }
    })
  </script>
</html>
