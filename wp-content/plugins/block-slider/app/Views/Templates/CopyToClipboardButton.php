<?php
/**
 * Main file for clipboard field template.
 *
 * @package BlockSlider
 */

namespace CakeWP\BlockSlider\Views\Templates;

/**
 * Main class for clipboard template.
 */
class CopyToClipboardButton {

	/**
	 * Renders the template based on the given properties.
	 *
	 * @param string $label - Button label.
	 * @param string $value - Value to copy.
	 *
	 * @return void
	 */
	public static function render( $label, $value ) {
		?>
			<button class="copy-shortcode-button">
				<?php echo esc_html( $label ); ?>
			</button>
		<script >
			window.addEventListener("load", () => {
				let copyButton = document.querySelector(".copy-shortcode-button")
				let shortcode = `<?php echo  $value; ?>`;
				let isClicked = false;
				
				copyButton.addEventListener("click", (click) => {
					let originalText = copyButton.innerHTML;
					if(!isClicked){
						navigator.clipboard.writeText(shortcode).then(()=> {
							copyButton.innerHTML = "Copied";
							isClicked = true
							setTimeout(() => {
								copyButton.innerHTML = originalText;
								isClicked = false;
							}, 1000);

					}).catch((error)=>console.error(error))
					}
				})
			})
		</script>
		<?php
	}

}
