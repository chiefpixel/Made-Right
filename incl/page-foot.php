<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/maderight.js"></script>

<script>
    $(function() {
        var $field1 = $('#instafilta-field'),
            $select = $('#empty');

        var filter1 = $field1.on('keyup', function() { 
            $select.val(''); 
        }).instaFilta({
            scope: '#scope',
            targets: '.section-item',
            sections: 'section',
            markMatches: true
        });

        $select.on('change', function() {
            $field1.val('');
            filter1.filterCategory($(this).val());
            console.log('yea')
        });
        
        $('#recipe-cats li').click(function(){
            console.log('click')
            console.log( $(this).html() )
            $field1.val('');
            filter1.filterCategory( $(this).attr('data-attr-value') ) ;
        });
    });
</script>
<script src="/js/instafilta.min.js"></script>


<script type="text/javascript">
    function DropDown(el) {
        this.dd = el;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents: function() {
            var obj = this;
    
            obj.dd.on('click', function(event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });
        }
    }
    
    $(function() {
    
        var dd = new DropDown($('#dd'));
    
        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown-5').removeClass('active');
        });
    
    });
</script>