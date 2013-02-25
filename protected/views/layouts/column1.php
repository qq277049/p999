<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <script charset="utf-8" src="<?php echo Yii::app()->baseUrl ?>/editor/kindeditor.js"></script>
    <script charset="utf-8" src="<?php echo Yii::app()->baseUrl ?>/editor/lang/en.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('#editor', {
                langType : 'en'
            })
        });
    </script>
</head>

<body>
<div class="container">
    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'null', // null or 'inverse'
    'brand'=>Yii::app()->name,
    'brandUrl'=>Yii::app()->homeUrl,
    'collapse'=>false, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'home', 'url'=>Yii::app()->homeUrl, 'active'=>true),
            ),
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'To be resolved', 'url'=>'#'),
                array('label'=>'Login', 'url'=>Yii::app()->createUrl('/user/login'),'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Register', 'url'=>Yii::app()->createUrl('/user/reg'),'visible'=>Yii::app()->user->isGuest),
                '---',
                array('label'=>Yii::app()->user->name, 'url'=>'#','visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'New Question','url'=>Yii::app()->createUrl('/question/create')),
                    array('label'=>'Logout', 'url'=>Yii::app()->createUrl('/user/logut')),
                )),
            ),
        ),
        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span3" placeholder="Search"></form>',
    ),
)); ?>
  <script>
    $(function(){
    	$('.navbar-fixed-top').removeClass('navbar-fixed-top')
    })
  </script>
    <div class="clear_top"></div>
  <div>
  <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-510764f17539acf6"></script>
<!-- AddThis Button END -->
  </div>
    <!--  全局开始  -->
    <div class="main">
        <?php echo $content; ?>
    </div>
    <!--  全局结束  -->
</div>
<!--补充start-->
    <div class="post-supply-zindex"></div>
    <div class="post-supply">
        <div class="form">
            <form action="<?php echo Yii::app()->createUrl('/question/supply'); ?>" method="post">
                <textarea name="supply"></textarea>
                <input type="submit" value="Add Supply">
            </form>
        </div>
    </div>
<!--补充end-->
<div style="display:none">
    <!-- Histats.com  START  (standard)-->
    <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
    <a href="http://www.histats.com" target="_blank" title="counter create hit" ><script  type="text/javascript" >
        try {Histats.start(1,2119145,4,511,95,18,"00000000");
            Histats.track_hits();} catch(err){};
    </script></a>
    <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2119145&101" alt="counter create hit" border="0"></a></noscript>
    <!-- Histats.com  END  -->
<?php echo Yii::app()->db->stats[0] ?> queries. <?php echo Yii::app()->db->stats[1] ?> seconds
</div>
<script type="text/javascript">
var infolinks_pid = 1361447;
var infolinks_wsid = 2;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>
</body>
</html>

<script type="text/javascript" src="./js/d.js"></script>
<script type="text/javascript" src="./editor/sy/scripts/shCore.js"></script>
<script type="text/javascript" src="./editor/sy/scripts/shAutoloader.js"></script>
<link type="text/css" rel="stylesheet" href="./editor/sy/styles/shCoreDefault.css"/>
<script type="text/javascript">
    function path()
    {
        var args = arguments,
                result = []
                ;

        for(var i = 0; i < args.length; i++)
            result.push(args[i].replace('@', './editor/sy/scripts/'));

        return result
    };

    SyntaxHighlighter.autoloader.apply(null, path(
            'applescript            @shBrushAppleScript.js',
            'actionscript3 as3      @shBrushAS3.js',
            'bash shell             @shBrushBash.js',
            'coldfusion cf          @shBrushColdFusion.js',
            'cpp c                  @shBrushCpp.js',
            'c# c-sharp csharp      @shBrushCSharp.js',
            'css                    @shBrushCss.js',
            'delphi pascal          @shBrushDelphi.js',
            'diff patch pas         @shBrushDiff.js',
            'erl erlang             @shBrushErlang.js',
            'groovy                 @shBrushGroovy.js',
            'java                   @shBrushJava.js',
            'jfx javafx             @shBrushJavaFX.js',
            'js jscript javascript  @shBrushJScript.js',
            'perl pl                @shBrushPerl.js',
            'php                    @shBrushPhp.js',
            'text plain             @shBrushPlain.js',
            'py python              @shBrushPython.js',
            'ruby rails ror rb      @shBrushRuby.js',
            'sass scss              @shBrushSass.js',
            'scala                  @shBrushScala.js',
            'sql                    @shBrushSql.js',
            'vb vbnet               @shBrushVb.js',
            'xml xhtml xslt html    @shBrushXml.js'
    ));
    SyntaxHighlighter.defaults['auto-links'] = false;
    SyntaxHighlighter.all();
</script>