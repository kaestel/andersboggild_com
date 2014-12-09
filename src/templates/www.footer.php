<?
$IC = new Items();
$collections = $IC->getItems(array("itemtype" => "photocollection", "status" => 1, "order" => "position"));
?>
	</div>

	<div id="navigation">
		<ul class="navigation">
			<li class="front"><a href="/">Frontpage</a></li>
			<li class="contact" itemscope itemtype="http://schema.org/Organization">
				<h3>Contact</h3>
				<ul itemscope itemtype="http://schema.org/PostalAddress">
					<li class="role" itemprop="role">Photographer</li>
					<li class="name" itemprop="name">Anders Bøggild</li>
					<li class="street" itemprop="streetAddress">N&oslash;rrebrogade 7A</li>
					<li class="postalcity"><span itemprop="postalCode">2200</span> <span itemprop="addressLocality">Copenhagen N</span></li>
					<li class="phone" itemprop="telephone">+45 4094 2202</li>
					<li class="email" itemprop="email"><a href="mailto:mail@andersboggild.com">mail@andersboggild.com</a></li>
				</ul>
			</li>
<?		foreach($collections as $collection):
	 		$collection = $IC->extendItem($collection); ?>
			<li<?= $HTML->attribute("class", $collection["classname"]) ?>><a href="/photos/<?= $collection["sindex"] ?>"><?= $collection["name"] ?></a></li>
<?		endforeach; ?>
		</ul>
	</div>

	<div id="footer"></div>

</div>

</body>
</html>