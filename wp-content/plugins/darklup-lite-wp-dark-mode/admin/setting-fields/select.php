<?php
namespace DarklupLite\Admin\Field;
 /**
  * 
  * @package    DarklupLite - WP Dark Mode
  * @version    1.0.0
  * @author     
  * @Websites: 
  *
  */
 


trait Select {

  public static $args;


  public function select_box( $args ) {

    $default = [
      'title'     => esc_html__( 'Select Field', 'darklup-lite' ),
      'sub_title' => esc_html__( 'This is select Field', 'darklup-lite' ),
      'name'        => '',
      'class'       => '',
      'wrapper_class' => '',
      'condition'   => '',
      'is_pro'    => 'no',
      'options'     => []
    ];

    $args = wp_parse_args( $args, $default );

    self::$args = $args;

    self::selectbox_markup();

  }


	public static function selectbox_markup() {
      $optionName = self::$optionName;
      $args = self::$args;
      $getData = self::$getOptionData;
      $fieldName  = $args['name'];
      $value = !empty( $getData[$fieldName] ) ? $getData[$fieldName] : '';

    $conditionData = '';
    if( !empty( $args['condition'] ) ) {
      $conditionData = json_encode( $args['condition'] );
    }
		?>
    <div class="darkluplite-row <?php echo esc_attr( $args['wrapper_class'].' '.$args['class'] ); ?>" data-condition="<?php echo esc_html($conditionData); ?>">
      <div class="darkluplite-col-lg-6 darkluplite-col-md-12">
	      <div class="darkluplite-single-settings-inner">
          <?php 
          if( $args['is_pro'] == 'yes' ) {
            echo '<div class="darklup-pro-ribbon">'.esc_html__( 'Pro', 'darklup' ).'</div>';
          }
          ?>
          <div class="details">
              <h5><?php echo esc_html( $args['title'] ); ?></h5>
              <?php
              if( !empty( $args['sub_title'] ) ) {
                echo '<p>'.esc_html( $args['sub_title'] ).'</p>';
              }
              ?>
          </div>
          <div class="button-switch">
              <div class="single-select-inner">
                  <select class="nice-select-active" name="<?php echo esc_attr( $optionName ).'['.$fieldName.']'; ?>">
                    <?php 
                    foreach( $args['options'] as  $key => $option ) {
                      echo '<option value="'.esc_attr( $key ).'" '.selected( $value, $key, false ).'>'.esc_html( $option ).'</option>';
                    }
                    ?>
                  </select>
              </div>
          </div>
        </div>
      </div>
    </div>
		<?php
	}

}  
