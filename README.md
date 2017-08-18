# twitter-widget
Twitter embed widget for WordPress. The embed is naturally responsive, so you don't have to worry about resizing it.

## Installation Instructions
1. Copy the 'class-twitter-feed-embed-widget.php' file into your theme directory, preferrably in a 'widgets' folder.
2. In 'functions.php', include your your widget using the following:
```php
require_once( dirname( __FILE__ ) . '/widgets/class-twitter-feed-embed-widget.php' );
```
3. In 'functions.php', preferrably in a function, register your widget using the following:
```php  
/**
 * Register all our custom widgets.
 */
function IC_register_widgets()
{
    register_widget( 'IC_Twitter_Feed_Embed_Widget' );
}
add_action( 'widgets_init', 'IC_register_widgets' );
```

## Usage Instructions
1. Add the widget to your desired widget area.
2. Input your Twitter handle.
3. Save.

![alt text](https://github.com/AdamSoucie/twitter-widget/blob/master/Screen%20Shot%202017-08-17%20at%2010.16.58%20PM.png)
