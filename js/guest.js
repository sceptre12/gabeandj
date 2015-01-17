(function() {
    var e = sessionStorage.getItem("item");
    var t = $(".gont");
    e = e.split("")[0];
    for (var n = 0; n < e; n++) {
        if(n >= 1){
            var r = "<h4>Guest " + (n + 1) + " </h4>" + '<div class="form-group guest">' + '<label  for="gf' + (n + 1) + '">First Name</label>' + '<input type="text" id="gf' + (n + 1) + '" name="fgname' + (n + 1) + '" placeholder=" First Name">' + '<label for="gl' + (n + 1) + '">Last Name</label>' + '<input type="text" id="gl' + (n + 1) + '" name="lname' + (n + 1) + '" placeholder="Last Name">' + "</div>" + '<div class="form-group">' + '<label for="gft' + (n + 1) + '">Meal choice</label>' + '<select name="gfood' + (n + 1) + '" id="gft' + (n + 1) + '" class="form-control">' + '<option value="gck' + (n + 1) + '">Chicken</option>' + '<option value="gfh' + (n + 1) + '">Fish</option>' + '<option value="gvg' + (n + 1) + '">Vegitaran</option>' + "</select>" + '<label for="gallergies' + (n + 1) + '">Do They have any Food Allergies</label>' + '<input type="text" name="gallergies' + (n + 1) + '" class="form-control" id="allergies' + (n + 1) + '" placeholder="Allergies">';
            t.append(r).find("label").css("margin-right", "10px");
        }        
    }
})();