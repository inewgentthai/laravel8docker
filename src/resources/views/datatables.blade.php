@extends('layouts.app')

@push('styles')
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"> --}}

<link rel="stylesheet" type="text/css" href="datatables/DataTables-1.11.3/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatables/Buttons-2.0.1/css/buttons.dataTables.min.css"/>

<link rel="stylesheet" type="text/css" href="datatables/Responsive-2.2.9/css/responsive.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatables/RowGroup-1.1.4/css/rowGroup.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatables/RowReorder-1.2.8/css/rowReorder.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatables/Scroller-2.0.5/css/scroller.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="datatables/Select-1.3.3/css/select.dataTables.min.css"/>
@endpush

@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script> --}}

<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="datatables/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="datatables/JSZip-2.5.0/jszip.min.js"></script>

{{-- <script type="text/javascript" src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script> --}}
{{-- <script type="text/javascript" src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script type="text/javascript" src="datatables/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="datatables/Buttons-2.0.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="datatables/Buttons-2.0.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="datatables/Buttons-2.0.1/js/buttons.print.min.js"></script>

<script type="text/javascript" src="datatables/Responsive-2.2.9/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="datatables/RowGroup-1.1.4/js/dataTables.rowGroup.min.js"></script>
<script type="text/javascript" src="datatables/RowReorder-1.2.8/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="datatables/Scroller-2.0.5/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="datatables/Select-1.3.3/js/dataTables.select.min.js"></script>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Order</th>
                <th>Description</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Alphabet puzzle</td>
                <td>2016/01/15</td>
                <td>Done</td>
                <td data-order="1000">€1.000,00</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Layout for poster</td>
                <td>2016/01/31</td>
                <td>Planned</td>
                <td data-order="1834">€1.834,00</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Image creation</td>
                <td>2016/01/23</td>
                <td>To Do</td>
                <td data-order="1500">€1.500,00</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Create font</td>
                <td>2016/02/26</td>
                <td>Done</td>
                <td data-order="1200">€1.200,00</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Sticker production</td>
                <td>2016/02/18</td>
                <td>Planned</td>
                <td data-order="2100">€2.100,00</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Glossy poster</td>
                <td>2016/03/17</td>
                <td>To Do</td>
                <td data-order="899">€899,00</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Beer label</td>
                <td>2016/05/28</td>
                <td>Confirmed</td>
                <td data-order="2499">€2.499,00</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Shop sign</td>
                <td>2016/04/19</td>
                <td>Offer</td>
                <td data-order="1099">€1.099,00</td>
              </tr>
              <tr>
                <td>9</td>
                <td>X-Mas decoration</td>
                <td>2016/10/31</td>
                <td>Confirmed</td>
                <td data-order="1750">€1.750,00</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Halloween invite</td>
                <td>2016/09/12</td>
                <td>Planned</td>
                <td data-order="400">€400,00</td>
              </tr>
              <tr>
                <td>11</td>
                <td>Wedding announcement</td>
                <td>2016/07/09</td>
                <td>To Do</td>
                <td data-order="299">€299,00</td>
              </tr>
              <tr>
                <td>12</td>
                <td>Member pasport</td>
                <td>2016/06/22</td>
                <td>Offer</td>
                <td data-order="149">€149,00</td>
              </tr>
              <tr>
                <td>13</td>
                <td>Drink tickets</td>
                <td>2016/11/01</td>
                <td>Confirmed</td>
                <td data-order="199">€199,00</td>
              </tr>
              <tr>
                <td>14</td>
                <td>Album cover</td>
                <td>2017/03/15</td>
                <td>To Do</td>
                <td data-order="4999">€4.999,00</td>
              </tr>
              <tr>
                <td>15</td>
                <td>Shipment box</td>
                <td>2017/02/08</td>
                <td>Offer</td>
                <td data-order="1399">€1.399,00</td>
              </tr>
              
              <tr>
                <td>16</td>
                <td>Wooden puzzle</td>
                <td>2017/01/11</td>
                <td>Done</td>
                <td data-order="1000">€1.000,00</td>
              </tr>
              <tr>
                <td>17</td>
                <td>Fashion Layout</td>
                <td>2016/01/30</td>
                <td>Planned</td>
                <td data-order="1834">€1.834,00</td>
              </tr>
              <tr>
                <td>18</td>
                <td>Toy creation</td>
                <td>2016/01/10</td>
                <td>To Do</td>
                <td data-order="1550">€1.550,00</td>
              </tr>
              <tr>
                <td>19</td>
                <td>Create stamps</td>
                <td>2016/02/26</td>
                <td>Done</td>
                <td data-order="1220">€1.220,00</td>
              </tr>
              <tr>
                <td>20</td>
                <td>Sticker design</td>
                <td>2017/02/18</td>
                <td>Planned</td>
                <td data-order="2100">€2.100,00</td>
              </tr>
              <tr>
                <td>21</td>
                <td>Poster rock concert</td>
                <td>2017/04/17</td>
                <td>To Do</td>
                <td data-order="899">€899,00</td>
              </tr>
              <tr>
                <td>22</td>
                <td>Wine label</td>
                <td>2017/05/28</td>
                <td>Confirmed</td>
                <td data-order="2799">€2.799,00</td>
              </tr>
              <tr>
                <td>23</td>
                <td>Shopping bag</td>
                <td>2017/04/19</td>
                <td>Offer</td>
                <td data-order="1299">€1.299,00</td>
              </tr>
              <tr>
                <td>24</td>
                <td>Decoration for Easter</td>
                <td>2017/10/31</td>
                <td>Confirmed</td>
                <td data-order="1650">€1.650,00</td>
              </tr>
              <tr>
                <td>25</td>
                <td>Saint Nicolas colorbook</td>
                <td>2017/09/12</td>
                <td>Planned</td>
                <td data-order="510">€510,00</td>
              </tr>
              <tr>
                <td>26</td>
                <td>Wedding invites</td>
                <td>2017/07/09</td>
                <td>To Do</td>
                <td data-order="399">€399,00</td>
              </tr>
              <tr>
                <td>27</td>
                <td>Member pasport</td>
                <td>2017/06/22</td>
                <td>Offer</td>
                <td data-order="249">€249,00</td>
              </tr>
              <tr>
                <td>28</td>
                <td>Drink tickets</td>
                <td>2017/11/01</td>
                <td>Confirmed</td>
                <td data-order="199">€199,00</td>
              </tr>
              <tr>
                <td>29</td>
                <td>Blue-Ray cover</td>
                <td>2018/03/15</td>
                <td>To Do</td>
                <td data-order="1999">€1.999,00</td>
              </tr>
              <tr>
                <td>30</td>
                <td>TV carton</td>
                <td>2019/02/08</td>
                <td>Offer</td>
                <td data-order="1369">€1.369,00</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Alphabet puzzle</td>
                <td>2016/01/15</td>
                <td>Done</td>
                <td data-order="1000">€1.000,00</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Layout for poster</td>
                <td>2016/01/31</td>
                <td>Planned</td>
                <td data-order="1834">€1.834,00</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Image creation</td>
                <td>2016/01/23</td>
                <td>To Do</td>
                <td data-order="1500">€1.500,00</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Create font</td>
                <td>2016/02/26</td>
                <td>Done</td>
                <td data-order="1200">€1.200,00</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Sticker production</td>
                <td>2016/02/18</td>
                <td>Planned</td>
                <td data-order="2100">€2.100,00</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Glossy poster</td>
                <td>2016/03/17</td>
                <td>To Do</td>
                <td data-order="899">€899,00</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Beer label</td>
                <td>2016/05/28</td>
                <td>Confirmed</td>
                <td data-order="2499">€2.499,00</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Shop sign</td>
                <td>2016/04/19</td>
                <td>Offer</td>
                <td data-order="1099">€1.099,00</td>
              </tr>
              <tr>
                <td>9</td>
                <td>X-Mas decoration</td>
                <td>2016/10/31</td>
                <td>Confirmed</td>
                <td data-order="1750">€1.750,00</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Halloween invite</td>
                <td>2016/09/12</td>
                <td>Planned</td>
                <td data-order="400">€400,00</td>
              </tr>
              <tr>
                <td>11</td>
                <td>Wedding announcement</td>
                <td>2016/07/09</td>
                <td>To Do</td>
                <td data-order="299">€299,00</td>
              </tr>
              <tr>
                <td>12</td>
                <td>Member pasport</td>
                <td>2016/06/22</td>
                <td>Offer</td>
                <td data-order="149">€149,00</td>
              </tr>
              <tr>
                <td>13</td>
                <td>Drink tickets</td>
                <td>2016/11/01</td>
                <td>Confirmed</td>
                <td data-order="199">€199,00</td>
              </tr>
              <tr>
                <td>14</td>
                <td>Album cover</td>
                <td>2017/03/15</td>
                <td>To Do</td>
                <td data-order="4999">€4.999,00</td>
              </tr>
              <tr>
                <td>15</td>
                <td>Shipment box</td>
                <td>2017/02/08</td>
                <td>Offer</td>
                <td data-order="1399">€1.399,00</td>
              </tr>
              
              <tr>
                <td>16</td>
                <td>Wooden puzzle</td>
                <td>2017/01/11</td>
                <td>Done</td>
                <td data-order="1000">€1.000,00</td>
              </tr>
              <tr>
                <td>17</td>
                <td>Fashion Layout</td>
                <td>2016/01/30</td>
                <td>Planned</td>
                <td data-order="1834">€1.834,00</td>
              </tr>
              <tr>
                <td>18</td>
                <td>Toy creation</td>
                <td>2016/01/10</td>
                <td>To Do</td>
                <td data-order="1550">€1.550,00</td>
              </tr>
              <tr>
                <td>19</td>
                <td>Create stamps</td>
                <td>2016/02/26</td>
                <td>Done</td>
                <td data-order="1220">€1.220,00</td>
              </tr>
              <tr>
                <td>20</td>
                <td>Sticker design</td>
                <td>2017/02/18</td>
                <td>Planned</td>
                <td data-order="2100">€2.100,00</td>
              </tr>
              <tr>
                <td>21</td>
                <td>Poster rock concert</td>
                <td>2017/04/17</td>
                <td>To Do</td>
                <td data-order="899">€899,00</td>
              </tr>
              <tr>
                <td>22</td>
                <td>Wine label</td>
                <td>2017/05/28</td>
                <td>Confirmed</td>
                <td data-order="2799">€2.799,00</td>
              </tr>
              <tr>
                <td>23</td>
                <td>Shopping bag</td>
                <td>2017/04/19</td>
                <td>Offer</td>
                <td data-order="1299">€1.299,00</td>
              </tr>
              <tr>
                <td>24</td>
                <td>Decoration for Easter</td>
                <td>2017/10/31</td>
                <td>Confirmed</td>
                <td data-order="1650">€1.650,00</td>
              </tr>
              <tr>
                <td>25</td>
                <td>Saint Nicolas colorbook</td>
                <td>2017/09/12</td>
                <td>Planned</td>
                <td data-order="510">€510,00</td>
              </tr>
              <tr>
                <td>26</td>
                <td>Wedding invites</td>
                <td>2017/07/09</td>
                <td>To Do</td>
                <td data-order="399">€399,00</td>
              </tr>
              <tr>
                <td>27</td>
                <td>Member pasport</td>
                <td>2017/06/22</td>
                <td>Offer</td>
                <td data-order="249">€249,00</td>
              </tr>
              <tr>
                <td>28</td>
                <td>Drink tickets</td>
                <td>2017/11/01</td>
                <td>Confirmed</td>
                <td data-order="199">€199,00</td>
              </tr>
              <tr>
                <td>29</td>
                <td>Blue-Ray cover</td>
                <td>2018/03/15</td>
                <td>To Do</td>
                <td data-order="1999">€1.999,00</td>
              </tr>
              <tr>
                <td>30</td>
                <td>TV carton</td>
                <td>2019/02/08</td>
                <td>Offer</td>
                <td data-order="1369">€1.369,00</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')
<script type="text/javascript">
$(document).ready(function() {
	// DataTable initialisation
	$('#example').DataTable(
		{
			"searching": false,
      "paging": true,
      "pageLength": 5,
      rowReorder: {
          selector: 'td:nth-child(2)'
      },
      "dom": 'Bfrtip',
      "buttons": [
        {
          text: 'Export Excel',
          action: function (e, dt, node, config) {
            console.log(dt)
            var params = dt.ajax.params();
              window.location.href = '/users/export?ExportToExcel=Yes&dt='+JSON.stringify( params );
            }
        },
        {
            "extend": 'excelHtml5',
            "className": 'btn btn-success datatable-space-button',
            "text": "Excel",
            "title" : function(){
                return "Transaction";
                
            },
            "customize": function(xlsx) {
              var sheet = xlsx.xl.worksheets['sheet1.xml'];
              console.log('debug-', xlsx)
              // xlsx.type = "blob";

              xlsx.xl.worksheets.setWorkbookPassword = "1234";
              // xlsx.xl.worksheets.Protection.SetPassword = "123";
              // xlsx.xl.worksheets.Protection.IsProtected = true;

              // xlsx.xl.worksheets.protection = {
              //   SetPassword: "123",
              //   IsProtected: true
              // }

              // xlsx.encryptStrength = 3;
              // var numberFormat = ['B'];
              // for ( i=0; i < numberFormat.length; i++ ) {
              //     $('row:eq(-1) c[r^='+numberFormat[i]+']', sheet).attr( 's', '63' );  
              //     $('row:eq(-1) c[r^='+numberFormat[i]+']', sheet).attr( 's', '17' );  
              // }
            }
        },
        {
            "extend": 'pdfHtml5',
            "footer": true,
            'download': 'open',
            "className": 'btn btn-success datatable-space-button',
            "orientation": 'landscape',
            //'messageTop': 'The information in this table is copyright to Sirius Cybernetics Corp.',
            "text": 'PDF',
            "title" : null,
            "messageTop" : function(){
                return "ข้อมูล Transaction Historical ของคุณ ";
            },
            "pageSize": 'A4',         
            "customize":function(doc){
                doc.userPassword = '123';
                doc.ownerPassword = '123456';
                doc.defaultStyle = {
                    // font:'THSarabun',
                    fontSize:12                               
                };
                doc.content[{
                    table: {
                        headerRows: 1,
                        widths: [ "100","100","100" ],
                    }
                }];
                doc.content[1].table.widths =
                    Array(doc.content[1].table.body[0].length + 1).join('*').split('');
            }
        }
      ]
		});
});
</script>
@endsection
