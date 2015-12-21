		</ul> <!-- gallery -->
	</section>
</div> <!-- section -->
<script>
	$("#gallery-w-preview").on("click", ".glp-readmore[data-category]", function() {
		$(".gallery-filters > li > [data-filter='" + $(this).data("category") + "']").trigger("click");
	});
</script>