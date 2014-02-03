<!-- フッター -->
<div id="footer">

<div id="footermenu">
<ul>
<?php dynamic_sidebar('フッターメニュー（左）'); ?>
</ul>

<ul>
<?php dynamic_sidebar('フッターメニュー（中央）'); ?>
</ul>

<ul>
<?php dynamic_sidebar('フッターメニュー（右）'); ?>
</ul>
</div>


<p>Copyright &copy; <?php bloginfo('name'); ?>, All rights reserved.</p>
</div>

</div>

<?php wp_footer(); ?>
</body>
</html>