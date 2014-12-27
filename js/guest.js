(function(){
    var ipos = sessionStorage.getItem("item");
    var $cnt = $('.gont');
    ipos = ipos.split("")[0];
    for(var a =0; a < ipos; a++){
        var gcont = "<h4>Guest "+(a+1)+" </h4>" 
            + "<div class=\"form-group guest\">"
            +"<label  for=\"gf"+(a+1)+"\">First Name</label>" 
            + "<input type=\"text\" id=\"gf"+(a+1)+"\" name=\"fgname"+(a+1)+"\" placeholder=\" First Name\">"
            + "<label for=\"gl"+(a+1)+"\">Last Name</label>" 
            + "<input type=\"text\" id=\"gl"+(a+1)+"\" name=\"lname"+(a+1)+"\" placeholder=\"Last Name\">" 
            + "</div>" 
            + "<div class=\"form-group\">" 
            + "<label for=\"gft"+(a+1)+"\">Food Types</label>" 
            + "<select name=\"gfood"+(a+1)+"\" id=\"gft"+(a+1)+"\" class=\"form-control\">" 
            + "<option value=\"gck"+(a+1)+"\">Chicken</option>"
            + "<option value=\"gfh"+(a+1)+"\">Fish</option>" 
            + "<option value=\"gvg"+(a+1)+"\">Vegitaran</option>" 
            + "</select>"
            + "<label for=\"gallergies"+(a+1)+"\">Do They have any Food Allergies</label>" 
            + "<input type=\"text\" name=\"gallergies"+(a+1)+"\" class=\"form-control\" id=\"allergies"+(a+1)+"\" placeholder=\"Allergies\">";
        $cnt.append(gcont).find("label").css("margin-right","10px");
    }
})();
  