<!-- Footer -->
<footer id="page-footer" class="opacity-0">
    <div class="content py-20 font-size-xs clearfix">
        <div class="float-right">
            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://weekndlabs.com" target="_blank">weekndlabs</a>
        </div>
        <div class="float-left">
            <a class="font-w600" href="https://weekndlabs.com" target="_blank">Clean Blog 1.0</a> &copy; <span class="js-year-copy">2019</span>
        </div>
    </div>
</footer>
<!-- END Footer -->
</div>
<!-- END Page Container -->

<script src="{{asset('js/cleandash.core.min.js')}}"></script>
<script src="{{asset('js/cleandash.app.min.js')}}"></script>
<script>
    $('#check-all').click(function (e) {
    $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
});</script>
<!-- Page JS Plugins -->
<script src="{{asset('js/plugins/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Page JS Code -->
<script src="{{asset('js/pages/be_pages_dashboard.min.js')}}"></script>
<script src="{{asset('js/pages/be_tables_datatables.min.js')}}"></script>



</body>
</html>