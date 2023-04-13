</div>
<footer id="footer">

    <div class="footer-nav">
        <ul>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/blog/')); ?>">Blog</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
        </ul>
    </div>
    <p>&copy;Adhoc Design All rights reserved.</p>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(function($){
  $('.tab').on('click',function(){
    var idx=$('.tab').index(this);
    $(this).addClass('is-active').siblings('.tab').removeClass('is-active');
    $(this).closest('.tab-group').next('.panel-group').find('.panel').removeClass('is-show');
    $('.panel').eq(idx).addClass('is-show');
  });
});
</script>
</body>

</html>