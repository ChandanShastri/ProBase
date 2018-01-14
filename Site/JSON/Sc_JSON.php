<html>
<body>
  <h3><b>Enter a number and string to Concat the Items.</b></h3><br>
    <p id="demo"></p>
  <b>Number : </b><input name="number" id="num" type="number" min="0" required><br><br>
  <b>String&nbsp&nbsp : &nbsp&nbsp</b><input name="text" id="text" type="text" min="0" required>
  <br><br>&nbsp&nbsp<button type="button" onclick="CSConv()">Submit</button>
<br><br><br>
<h4 id ="ansx"></h4>


  <script>


  function CSConv() {
  var Number, Text, Anss;

  Number = document.getElementById("num").value;
  Text = document.getElementById("text").value;
  Anss=Number+Text;

    var ChandanS,TextS,ans,Answer;

    ChandanS = JSON.stringify(Number);
    TextS = JSON.stringify(Text);
    Answer = ChandanS.concat(TextS);

    document.getElementById("ansx").innerHTML ="Combined Sring is : "+Anss;

}
  </script>

</body>
</html>
