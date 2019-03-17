<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/master.css"/>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  </head>
  <body>
    <div id="vue-app">
      <div class="row">
        <!-- name of the player -->
        <div id="name" class="col-xs-12 text-xs-center">
          <input v-if="name.length < 6 || end" type="text" style="width:250px;" placeholder="Enter your Name (At least 6 characters)" v-model="name" v-on:keyup="check" class="form-control is-invalid">
          <input v-else type="text" style="width:250px;" v-model="name" v-on:keyup="check" class="form-control is-valid">
        </div>
      </div>
      <div class="row">
        <!-- image of bag -->
        <div id="bag-img" class="col-xs-12 text-xs-center" v-bind:class="{burst:end}"></div>
      </div>
      <div class="row">
        <!-- health of bag -->
        <div id="bag-health" class="col-xs-12 text-xs-center">
          <div v-if="health > 10" v-bind:style="{width:health+'%'}"></div>
          <div v-else v-on:load="!end" v-bind:style="{width:'0%'}"></div>
        </div>
      </div>
      <div class="row">
        <!-- controls of game -->
        <div id="controls" class="col-xs-12 text-xs-center">
          <button v-show="!end && name.length > 5" v-on:click="punch" type="button" class="btn btn-lg btn-outline-success">Punch</button>
          <button onclick="php()" v-on:click="restart" type="button" class="btn btn-lg btn-outline-warning">Restart</button>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/myapp.js"></script>
  </body>
</html>
