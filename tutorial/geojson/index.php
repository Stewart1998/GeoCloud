<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/core/config.php";?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ini['app_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="<?php echo $ini['app_url'] ?>/assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <style>
        aside {
            position: fixed;
            background-color: #2a2a2a;
            border-right: 5px solid #99d9ea;
            height: 100vh;
            width: 10%;
            z-index: 1;
            padding: 1em;
            color: #fff;
        }

        aside.scroll {
            top: 4em;
        }

        main {
            margin-left: 10%;
            width: 90%;
            z-index: 0;
        }

        aside nav.aside {
            position: relative;
            height: auto;
            border: none;
            width: 90%;
            padding: 0;
        }

        aside nav.aside ul li {
            padding-left: 0;
            display: block;
            border-bottom: 3px solid #fff;
            width: 100%;
            margin-left: 0;
            text-align: left;
        }

        aside nav.aside ul li:hover {
            border-bottom-color: #99d9ea;
            color: #99d9ea;
            cursor: pointer;
        }

        aside nav.aside ul li:hover>a {
            color: #99d9ea;
        }

        aside nav.aside ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1.5em;
        }

        pre {
            font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
            margin-bottom: 10px;
            overflow: auto;
            width: auto;
            padding: 5px;
            background-color: #fff;
            color: #000;
            width: 650px !ie7;
            padding-bottom: 20px !ie7;
            max-height: 600px;
            text-align: left;
        }
    </style>
    <?php include_once($ini['app_dir'] . "/templates/header.html") ?>
<?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <aside>
        <nav class="aside">
            <ul>
                <li><a href="#geojson">GeoJson</a></li>
                <li><a href="#section2">GeoJson Example</a></li>
                <li><a href="#section3">Section 3</a></li>
                <li><a href="#section4">Section 4</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <div class="container main">
            <section id="geojson">
                <div class="section_header">GeoJson</div>
                <div class="section_body" style="text-align: left;">
                    <p>GeoJSON is an encoding format used to map geographic data structures. It is a
                        geospatial data interchange format based on JSON (JavaScript Object Notation). It
                        places a marker on the map at the given coordinates as well as the other data
                        provided such as name, geometry, amenity and properties.
                    </p>
                    <p>
                        GeoJSON supports:
                        <ul>
                            <li>Point</li>
                            <li> LineString</li>
                            <li> Polygon</li>
                            <li> MultiPoint</li>
                            <li> MultiLineString</li>
                            <li> MultiPolygon</li>
                        </ul>
                    </p>
                    <p>Geometric Objects with multiple properties are known as Feature objects and
                        multiple Feature objects are contained in FeatureCollection objects.</p>
                </div>
            </section>
            <section id="section2">
                <div class="section_header">GeoJson Example</div>
                <div class="section_body">
                    <pre>
<code>
1     var geojsonFeature = {
2         &quot;type&quot;: &quot;Feature&quot;,
3         &quot;properties&quot;: {
4              &quot;name&quot;: &quot;Coors Field&quot;,
5              &quot;amenity&quot;: &quot;Baseball Stadium&quot;,
6              &quot;popupContent&quot;: &quot;This is where the Rockies play!&quot;
7         },
8         &quot;geometry&quot;: {
9             &quot;type&quot;: &quot;Point&quot;,
10            &quot;coordinates&quot;: [-104.99404, 39.75621]
11        }
12    };
</code>
                        </pre>
                </div>
            </section>
            <section id="section3">
                <div class="section_header">Section 3</div>
                <div class="section_body">
                    <p>On out About us page you can find information about the individual members of the Geocloud
                        team.
                    </p>
                </div>
            </section>
            <section id="section4">
                <div class="section_header">Section 4</div>
                <div class="section_body">
                    <p>On our tutorial page you will find information regarding GeoJSON and how we used this
                        software to
                        bring you these services.</p>
                </div>
            </section>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>
</body>

</html>