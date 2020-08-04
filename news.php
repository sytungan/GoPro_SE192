<style>
    h5 {
        font-size: 20px;
        color: #ba0000;
    }

    img {
        width: 150px;
        padding-top: 0px;
    }

    #khiem {
        width: 100%;
        margin-bottom: 10px;
    }

    #khiem::after {
        content: "";
        clear: both;
        display: block;
    }

    #left {
        float: left;
        width: 25%;
    }

    #right {
        float: right;
        width: 70%;
    }
</style>
<?php
$url='https://vnexpress.net/rss/giao-duc.rss';
$lines_array=file($url);
$lines_string=implode('',$lines_array);

$xml = simplexml_load_string($lines_string);


if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
}
?>

<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<!-- <h4 class="cat-title">Tin Mới Nhất</h4> -->
	<?php
	$i = 0;
	foreach ($xml->xpath('//channel/item') as $items)
	{
		if (($i > 4)) {
			break;
		}
		if (strpos($items->description, "src=") && ($i < 6)) {
			$str = explode('src=', $items->description);
			$str1 = explode('></a></br>', $str[1]);
	?>
	<div class="single-latest-post row align-items-center" id="khiem">
		<div class="col-lg-5 post-left" id="left">
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<img class="img-fluid" src=<?php echo $str1[0].'"'; ?> >
			</div>
			<!-- <ul class="tags">
				<li><a href="#">Tin mới nhất</a></li>
			</ul> -->
		</div>
		<div class="col-lg-7 post-right" id="right">
			<a href="<?php echo $items->link; ?>">
				<h5>
					<?php echo $items->title; ?>
				</h5>
			</a>
			<ul class="meta">
				<!-- <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li> -->
				<li><a href="#"><span class="lnr lnr-calendar-full"></span>
					<?php echo $items->pubDate; ?>
				</a></li>
				<!-- <li><a href="#"><span class="lnr lnr-bubble"></span>Comments</a></li> -->
			</ul>
			<p class="excert">
				<?php echo $str1[1]; ?>
			</p>
		</div>
	</div>
	<?php $i++;} } ?>
</div>
<!-- End latest-post Area -->