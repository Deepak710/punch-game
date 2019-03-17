var name = '';
var n = 0;
var game = new Vue({
  el:'#vue-app',
  data:{
	  name:'',
    n:0,
    health:100,
    end:false
  },
  methods:{
    punch:function(){
      this.n++;
      this.health -= Math.floor(Math.random() * (10 - 1 + 1)) + 1;
      if(this.health <= 0){
        name = this.name;
        n = this.n;
        this.end = true;
      }
    },
    restart:function(){
      this.n=0;
      this.end = false;
      this.health = 100;
      this.name='';
    },
    check:function(){
      if(!this.name){
        this.restart();
      }
    }
  },
  computed:{

  }
});

function php(){
  if(game.end){
    document.location.href = 'connect.php?name=' + name + '&n=' + n;
  }
}

// document.addEventListener('DOMContentLoaded', function () {
//   const b = document.querySelector('#php');
//   b.insertAdjacentHTML('afterbegin', `alert('yes')`)
// });

// $(document).ready(function () {
//   $('#php').html('alert("yes")')
//   // $('#php').html('alert("<?php mysqli_query(new mysqli('localhost', 'root', '', 'game'), "INSERT INTO users (userName, date, numberChances) VALUES ('Peter', '" . date("Y-m-d H:i:s") . "', 10)") ?>")')
// });
