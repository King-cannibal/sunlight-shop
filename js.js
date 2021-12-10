var car = Simbla.Object.extend("public");

var query = new Simbla.Query(uploads);

query.equalTo("available", true);

query.greaterThan("car_year", 2014);

   query.find({

         success: function(uploads) {

              var str="";

               for (var i=0;i<car.length;i++){





    }

    $("#snd").html(str);

  },

       error: function(uploads, error) {

           alert("Error - The object was not retrieved successfully" );

    }

 });
