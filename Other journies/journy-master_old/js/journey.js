var ITEMS = [

    {id: 1, tag: 'pub', title: 'Bugar\'D Pub', text: 'Bugar’D is a pub combined with live music and DJ. Offering up to 25% off for us! <a href="http://www.bugard.ro" target="_blank">www.bugard.ro</a>', pic: 'Bugard.jpg', pos: [45.75769,21.22767]},

    {id: 2, tag: 'pub', title: 'El Che Club', text: 'One of the best clubs in town! 25% Off for us! <a href="https://www.facebook.com/el.che.56" target="_blank">Facebook page</a>', pic: 'Elche.jpg', pos: [45.75681,21.22706]},

    {id: 3, tag: 'coffee', title: 'Erick\'s Coffee House', text: 'Not just a Coffee house, a cousy one! Check us for discounts! <a href="https://www.facebook.com/pages/Ericks/" target="_blank">Facebook page</a>', pic: 'Ericks.jpg', pos: [45.75756,21.22807]},

    {id: 4, tag: 'food, coffee', title: 'Jarvis Restaurant', text: 'Captain Jarvis and Friends are waiting for you! 25% Off discounts for us! <a href="http://www.jarvis.ro" target="_blank">www.jarvis.ro</a>', pic: 'Jarvis.jpg', pos: [45.75834,21.22749]},

    {id: 5, tag: 'food, coffee', title: 'Insieme Restaurant', text: 'Italian restaurant having the best pasta in town! Menu discounts for us! <a href="http://www.restaurantinsieme.ro" target="_blank">www.restaurantinsieme.ro</a>‎', pic: 'insieme.jpg', pos: [45.75750,21.22890]},

    {id: 6, tag: 'pu, coffee', title: 'Van Graf Bar', text: 'Offering a cousy place to serve a coffee or a good party place on weekends. 25% Off for us! <a href="http://www.vangraph.ro" target="_blank">www.vangraph.ro</a>', pic: 'vangraph.jpg', pos: [45.75934,21.23010]},

    {id: 7, tag: 'pub, food', title: 'Enoteca de Savoya ', text: 'The original wine sellar in town! Offering discounts for wine bottles, for tastings just for us! <a href="http://www.enotecadesavoya.ro" target="_blank">www.enotecadesavoya.ro</a>', pic: 'etnoteca.jpg', pos: [45.75670,21.22879]},

    {id: 8, tag: 'event', title: '24 hours of theater', text: 'Just imagine: 24 hours full of theater! This year edition was spectacular! <a href="http://www.evive.ro/24-de-ore-de-teatru-2013-poze/evenimente/29-martie-2013" target="_blank">www.evive.ro</a>', pic: '24hourstheather.jpg', pos: [0,0]},

    {id: 9, tag: 'bed', title: 'Hostel Costel', text: 'A traveler\'s den with young stuff and high quality services. <a href="http://www.hostel-costel.ro/" target="_blank">Coolest hostel in town!</a>', pic: 'costel.jpg', pos: [45.758601,21.244701]}

];

$(document).ready(function(){
    $('form').submit(function(){
        var input = $(this).find('input[type="email"]');
        if (!validateEmail(input.val())) {
            alert('Please type a valid email address');
            input.focus();
            return false;
        }
        return true;
    });

    $("blockquote a.cite-trigger").click(function(){
        $(this).hide();
        $(this).parents('blockquote').find('.cite-dots').hide();
        $(this).parents('blockquote').find('.cite-more').show();
        return false;
    });


    $("#filter-categories a").click(function(){$(this).parent().click();return false;});

    loadCategories();

    $("#categories").mixitup();

	var hiddenTags="";
	$("#filters").on("click", ".category",function(){
		var tag=$(this).data("tag");
		$("[data-category='"+tag+"']").toggle();		
	});
});

$(window).load(function(){

    var total = 0;
    $.each($("#filter-categories li"), function(i, item) {
        total += $(item).width();
    });
    total+=10;

    $("#filter-categories").css({width: total+'px'});

    preloadImages(ITEMS);

    var myLatlng = new google.maps.LatLng(45.759722,21.23);
    var mapOptions = {
        zoom: 14,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    setMarkers(map, ITEMS);
	
	
});

function loadCategories(){
    var html = '';
    html += '<div class="row">';
    $.each(ITEMS, function(i, item) {
        html += '<div class="col-md-4 mix '+item.tag+'"><div class="thumbnail"><img src="pics/768/'+item.pic+'" /><div class="caption"><h3>'+item.title+'</h3><p>'+item.text+'</p></div></div></div>';
    });

    $("#categories").html(html);
}

function setMarkers(map, locations) {

    var bounds = new google.maps.LatLngBounds();
    var infowindow = null;
    var contentString = '';

        infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 250
    });

    for (var i = 0; i < locations.length; i++) {
        var item = locations[i];
        if (item.pos[0] == 0) {
            continue;
        }
        var myLatLng = new google.maps.LatLng(item.pos[0], item.pos[1]);

        contentString = '<div id="bubbleContent">'+
            '<p class="img"><img src="/pics/' + item.pic + '" width="250" /></p>'+
            '<p>' + item.text + '</p>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: item.title,
            zIndex: i+2,
            icon: '/img/pin5.png', //'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
            html: contentString
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(this.html);
            infowindow.open(map,this);
        });

        bounds.extend(myLatLng);
    }
    map.fitBounds(bounds);
}

function preloadImages(locations) {
    $(locations).each(function(){
        $('<img/>')[0].src = 'pics/' + this.pic;
    });
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}