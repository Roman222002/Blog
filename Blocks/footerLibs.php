<footer class="blog-footer">
    <div class="text-muted foottxt">
        <p>© <?php echo date("Y"); ?> Blog Lab 8</p>
    </div>
</footer>

<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/js/salvattore.min.js"></script>
<script src="../lib/js/popper.min.js"></script>
<script src="../lib/js/heart.js"></script>
<script src="../lib/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'hover',
            container: 'body'
        });
        $(".se-pre-con").fadeOut("slow");
    });
</script>