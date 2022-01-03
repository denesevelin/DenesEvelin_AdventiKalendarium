<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <title>Adveni kalendárium</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo base_url(); ?>kalendarium/index">Kalendárium</a></li>
            <li><a href="<?php echo base_url(); ?>kalendarium/tetelek">Tételek</a></li>
        </ul>        
    </nav>
    
    <section class='kalendarium'>
        <div class="napok" id="egy" onclick="egy()">1</div>
        <div class="napok" id="ketto" onclick="ketto()">2</div>
        <div class="napok" id="harom" onclick="harom()">3</div>
        <div class="napok" id="negy" onclick="negy()">4</div>
        <div class="napok" id="ot" onclick="ot()">5</div>
        <div class="napok" id="hat" onclick="hat()">6</div>
        <div class="napok" id="het" onclick="het()">7</div>
        <div class="napok" id="nyolc" onclick="nyolc()">8</div>
        <div class="napok" id="kilenc" onclick="kilenc()">9</div>
        <div class="napok" id="tiz" onclick="tiz()">10</div>
        <div class="napok" id="tizenegy" onclick="tizenegy()">11</div>
        <div class="napok" id="tizenketto" onclick="tizenketto()">12</div>
        <div class="napok" id="tizenharom" onclick="tizenharom()">13</div>
        <div class="napok" id="tizennegy" onclick="tizennegy()">14</div>
        <div class="napok" id="tizenot" onclick="tizenot()">15</div>
        <div class="napok" id="tizenhat" onclick="tizenhat()">16</div>
        <div class="napok" id="tizenhet" onclick="tizenhet()">17</div>
        <div class="napok" id="tizennyolc" onclick="tizennyolc()">18</div>
        <div class="napok" id="tizenkilenc" onclick="tizenkilenc()">19</div>
        <div class="napok" id="husz" onclick="husz()">20</div>
        <div class="napok" id="huszonegy" onclick="huszonegy()">21</div>
        <div class="napok" id="huszonketto" onclick="huszonketto()">22</div>
        <div class="napok" id="huszonharom" onclick="huszonharom()">23</div>
        <div class="napok" id="huszonnegy" onclick="huszonnegy()">24</div>
    </section>
    

    <script>
    function egy() {
    document.getElementById("egy").innerHTML = "";
    }
    function ketto() {
    document.getElementById("ketto").innerHTML = "";
    }
    function harom() {
    document.getElementById("harom").innerHTML = "";
    }
    function negy() {
    document.getElementById("negy").innerHTML = "";
    }
    function ot() {
    document.getElementById("ot").innerHTML = "";
    }
    function hat() {
    document.getElementById("hat").innerHTML = "";
    }
    function het() {
    document.getElementById("het").innerHTML = "";
    }
    function nyolc() {
    document.getElementById("nyolc").innerHTML = "";
    }
    function kilenc() {
    document.getElementById("kilenc").innerHTML = "";
    }
    function tiz() {
    document.getElementById("tiz").innerHTML = "";
    }
    function tizenegy() {
    document.getElementById("tizenegy").innerHTML = "";
    }
    function tizenketto() {
    document.getElementById("tizenketto").innerHTML = "";
    }
    function tizenharom() {
    document.getElementById("tizenharom").innerHTML = "";
    }
    function tizennegy() {
    document.getElementById("tizennegy").innerHTML = "";
    }
    function tizenot() {
    document.getElementById("tizenot").innerHTML = "";
    }
    function tizenhat() {
    document.getElementById("tizenhat").innerHTML = "";
    }
    function tizenhet() {
    document.getElementById("tizenhet").innerHTML = "";
    }
    function tizennyolc() {
    document.getElementById("tizennyolc").innerHTML = "";
    }
    function tizenkilenc() {
    document.getElementById("tizenkilenc").innerHTML = "";
    }
    function husz() {
    document.getElementById("husz").innerHTML = "";
    }
    function huszonegy() {
    document.getElementById("huszonegy").innerHTML = "";
    }
    function huszonketto() {
    document.getElementById("huszonketto").innerHTML = "";
    }
    function huszonharom() {
    document.getElementById("huszonharom").innerHTML = "";
    }
    function huszonnegy() {
    document.getElementById("huszonnegy").innerHTML = "";
    }
    </script>
    
</body>
</html>