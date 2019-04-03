var currentLoc = "http://geocloud-cali-com.stackstaging.com/core/lib";
$("#search_form").submit(function (e) {

    e.preventDefault();

    var query = $("input[name='country']").val();

    if (query != "") {
        search(query)
    } else {
        alert("Please enter a value!")
    }
});

$("#currentLocation").click(function (e) {
    e.preventDefault();
    getUser();
})

function getUser() {
console.log("Current Location Active");
    $.ajax({
        url: currentLoc + "/users_location.php",
        type: "GET",
        dataType: "json",
        success: function (data) {
            search(data.city + "," + data.country);
        }, 
        error: function(e){
            console.log(e.responseText)
            alert("Sorry, an error has occured!")
        }
    });
}

function getWeather(city) {

    //checks if the field is valid

    if (city != '') {

        $.ajax({
            //open weather map API is used 
            //you can generate a key on the openweathermap website if this key does not work on your computer
            url: 'http://api.openweathermap.org/data/2.5/weather?id=' + city + "&units=metric" + "&APPID=80b212f255a96d11cb3765ed3191802f",
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
                var widget = weatherinfo(data)

                console.log(data)

                var type = data.weather[0].main;

                console.log(type)

                $(".page_title").html(data.name + ", " + data.sys.country);

                $(".weather_img").attr("src", 'http://openweathermap.org/img/w/' + data.weather[0].icon + '.png')

                if (type == "Rain") {
                    $("#banner").css('background-image', "url('http://geocloud-cali-com.stackstaging.com/assets/img/rain_banner.jpg')");
                } else if (type == "Clouds") {
                    $("#banner").css('background-image', "url('http://geocloud-cali-com.stackstaging.com/assets/img/banner-clouds.png')");
                } else if (type == "Clear") {
                    $("#banner").css('background-image', "url('http://geocloud-cali-com.stackstaging.com/assets/img/clear.jpg')");
                }else if (type == "Mist") {
                    $("#banner").css('background-image', "url('http://geocloud-cali-com.stackstaging.com/assets/img/mist.jpg')");
                    $(".page_title").css('color', "white");
                }

                $("#low").html(data.main.temp_min + "&deg;")

                $(".weather_description").html(data.weather[0].description)

                getForcast(data.id)
            }

        });

        //if field is not valid display error message
    } else {
        $("#error").html("<div class='alert alert-danger' id='errorCity'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>City field cannot be empty</div>");
    }


}

function getForcast(query) {

    //checks if the field is valid
    $.ajax({
        //open weather map API is used 
        //you can generate a key on the openweathermap website if this key does not work on your computer
        url: 'http://api.openweathermap.org/data/2.5/forecast?id=' + query + "&units=metric" + "&APPID=80b212f255a96d11cb3765ed3191802f",
        type: "GET",
        dataType: "jsonp",
        success: function (data) {
            console.log(data)
            var list = data.list;
            var currentDate = null;
            var count = 1;
            var count2 = 0;


            list.forEach(function (element) {
                var dateTime = element.dt_txt;

                dateTime = dateTime.split(' ');

                var date = dateTime[0]; var time = dateTime[1];


                if (currentDate == "") {

                    currentDate = date;
                }

                var d = new Date();

                var month = d.getMonth() + 1;
                var day = d.getDate();

                var todaysDate = d.getFullYear() + '-' +
                    (month < 10 ? '0' : '') + month + '-' +
                    (day < 10 ? '0' : '') + day;


                if (date == todaysDate) {

                    count2++;

                    time = time.substring(0, time.length - 3);

                    time = time.split(':');

                    time = "<b>" + time[0] + "</b>" + time[1]

                    time = time.replace(':', '');

                    max = 3;

                    var div = '<div class="weather_item">'
                        + '<div class="weather_time">' + time + '</div>'
                        + '<div class="wrap3">'
                        + '<img class="weather_img_inner" src="http://openweathermap.org/img/w/' + element.weather[0].icon + '.png">'
                        + '<div class="weather_degree">' + element.main.temp + "&deg;" + '</div>'
                        + '</div>'
                        + '<div class="weather_footer">'
                        + '<img class="precipitation_img" src="/img/699839-icon-36-raindrops-512.png">'
                        + '<div class="precipitation">'+ element.main.humidity +'&#37;</div>'
                        + ' </div>'
                        + ' </div>';

                    $("#weather_container").append(div);
                } else {
                    if(count2 == 0){
                        count2++;
                        max= 12;
                        var div = '<div class="weather_item none"><div>No forcast for today. Check out tomorrow</div></div>';

                    $("#weather_container").append(div);
                    }
                    if (count <= max) {
                        time = time.substring(0, time.length - 3);

                        time = time.split(':');

                        time = "<b>" + time[0] + "</b>" + time[1]

                        time = time.replace(':', '');

                        if (count != 1) {
                            day = "";
                        } else {
                            var date2 = new Date(date)
                            var day1 = date2.getDay()
                            var day2 = date2.getDate();

                            if (day1 == 0) {
                                day = "Sun";
                            } else if (day1 == 1) {
                                day = "Mon";
                            } else if (day1 == 2) {
                                day = "Tue";
                            } else if (day1 == 3) {
                                day = "Wed";
                            } else if (day1 == 4) {
                                day = "Thu";
                            } else if (day1 == 5) {
                                day = "Fri";
                            } else if (day1 == 6) {
                                day = "Sat";
                            }
                        }

                        var div = '<div class="weather_item">'
                            + '<div class="weather_time">' + time + '</div>'
                            + '<div class="weather_date">' + day + '</div>'
                            + '<div class="wrap3">'
                            + '<img class="weather_img_inner" src="http://openweathermap.org/img/w/' + element.weather[0].icon + '.png">'
                            + '<div class="weather_degree">' + element.main.temp + "&deg;" + '</div>'
                            + ' </div>'
                            + '<div class="weather_footer">'
                            + '<img class="precipitation_img" src="/img/699839-icon-36-raindrops-512.png">'
                            + '<div class="precipitation">'+ element.main.humidity +'&#37;</div>'
                            + '</div>'
                            + '</div>';

                        $("#weather_container").append(div);
                    }
                    count++;
                }

                if (date != currentDate) {

                    currentDate = date;

                    if (currentDate != todaysDate) {

                        var date2 = new Date(date)
                        var day1 = date2.getDay()
                        var day2 = date2.getDate();

                        if (day1 == 0) {
                            day = "Sun";
                        } else if (day1 == 1) {
                            day = "Mon";
                        } else if (day1 == 2) {
                            day = "Tue";
                        } else if (day1 == 3) {
                            day = "Wed";
                        } else if (day1 == 4) {
                            day = "Thu";
                        } else if (day1 == 5) {
                            day = "Fri";
                        } else if (day1 == 6) {
                            day = "Sat";
                        }


                        var div = '<div class="weather_wrap small">'
                            + ' <div class="weather_title">' + day + " " + day2 + '</div>'
                            + '<img class="weather_img_inner" src="http://openweathermap.org/img/w/' + element.weather[0].icon + '.png">'
                            + ' <div class="weather_low">'
                            + '<div class="high">' + element.main.temp_max + "&deg;" + '</div>'
                            + '<div class="low">' + element.main.temp_min + "&deg;" + '</div>'
                            + '</div>'
                            + ' </div>';

                        $("#small_wrap").append(div)

                    }
                }

            });


        },
        error: function (e) {
            console.log(e.responseMessage);

        }
    });

}


function search(query) {

    //checks if the field is valid

    $.ajax({
        //open weather map API is used 
        //you can generate a key on the openweathermap website if this key does not work on your computer
        url: 'http://api.openweathermap.org/data/2.5/weather?q=' + query + "&units=metric" + "&APPID=80b212f255a96d11cb3765ed3191802f",
        type: "GET",
        dataType: "jsonp",
        success: function (data) {
            location.href = "http://geocloud-cali-com.stackstaging.com/weather/" + data.id
        },
        error: function (e) {
            console.log(e.responseMessage);

        }
    });

}






//currently this function does not work properly. it takes in the lat and long but it does it gives undified as results for the weather



function getWeathercoor() {


    var lat = $("#lat").val();
    var long = $("#long").val();

    //checks if the field is valid

    if (lat != '' + long != '') {

        $.ajax({
            //open weather map API is used
            url: 'http://api.openweathermap.org/data/2.5/weather?lat=' + lat + '&lon=' + long + "&units=metric" + "&APPID=c10bb3bd22f90d636baa008b1529ee25",
            type: "GET",
            dataType: "jsonp",
            success: function (data) {
                var widget = weatherinfo(data)


                $("#weather").html(widget);

                $("#lat").val('');
                $("#long").val('');
            }

        });

        //if field is not valid display error message
    } else {
        $("#error").html("<div class='alert alert-danger' id='errorCity'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>City field cannot be empty</div>");
    }


}


//displays weather information
function weatherinfo(data) {
    return '<h2 style="font-weight:bold; font-size:30px; padding-top:20px;" class="text-center">Current Weather for ' + data.name + ', ' + data.sys.country + '</h2>' +
        "<h3 style='padding-left:40px;'><strong>Weather</strong>: " + data.weather[0].main + "</h3>" +
        "<h3 style='padding-left:40px;'><strong>Description</strong>:<img src='http://openweathermap.org/img/w/" + data.weather[0].icon + ".png'> " + data.weather[0].description + "</h3>" +
        "<h3 style='padding-left:40px;'><strong>Temperature</strong>: " + data.main.temp + " &deg;C</h3>" +
        "<h3 style='padding-left:40px;'><strong>Pressure</strong>: " + data.main.pressure + " hpa</h3>" +
        "<h3 style='padding-left:40px;'><strong>Humidity</strong>: " + data.main.humidity + "%</h3>";
}






//currently this function does not work properly. it takes in the lat and long but it does it gives undified as results for the weather

/*

function getWeathercoor(){
    
    
    var lat = $("#lat").val();
        var long = $("#long").val();
    
    //checks if the field is valid
    
    if(lat != '' + long != '' ){
       
        $.ajax({
            //open weather map API is used
           url: 'http://api.openweathermap.org/data/2.5/weather?lat=' + lat + '&lon='+ long + "&APPID=c10bb3bd22f90d636baa008b1529ee25",
            type: "GET",
            dataType: "jsonp",
            success: function(data){
                var widget = weatherinfo(data)
                
                
                $("#weather").html(widget);
                
                $("#lat").val('');
                $("#long").val('');
            }
            
        });
        
        //if field is not valid display error message
    }else{
        $("#error").html("<div class='alert alert-danger' id='errorCity'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>City field cannot be empty</div>");
    }
    
    
}
*/








//displays weather information
function weatherinfo(data) {
    return '<h2 style="font-weight:bold; font-size:30px; padding-top:20px;" class="text-center">Current Weather for ' + data.name + ', ' + data.sys.country + '</h2>' +
        "<h3 style='padding-left:40px;'><strong>Weather</strong>: " + data.weather[0].main + "</h3>" +
        "<h3 style='padding-left:40px;'><strong>Description</strong>:<img src='http://openweathermap.org/img/w/" + data.weather[0].icon + ".png'> " + data.weather[0].description + "</h3>" +
        "<h3 style='padding-left:40px;'><strong>Temperature</strong>: " + data.main.temp + " &deg;C</h3>" +
        "<h3 style='padding-left:40px;'><strong>Pressure</strong>: " + data.main.pressure + " hpa</h3>" +
        "<h3 style='padding-left:40px;'><strong>Humidity</strong>: " + data.main.humidity + "%</h3>";
}



$('#autocomplete').autocomplete({
    serviceUrl: currentLoc + '/countries.php',
    onSelect: function (suggestion) {
        search(suggestion.value);
    }
});








