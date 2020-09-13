@extends('admin.layouts.app')
@section('content')
<h1 class="m-0 text-dark">Dashboard</h1>
<div class="container-fluid">
    <div class="row">
        <div class="card bg-gradient-primary col-6">
            <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

            <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
                <!-- button with a dropdown -->
                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">August 2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="07/26/2020" class="day old weekend">26</td><td data-action="selectDay" data-day="07/27/2020" class="day old">27</td><td data-action="selectDay" data-day="07/28/2020" class="day old">28</td><td data-action="selectDay" data-day="07/29/2020" class="day old">29</td><td data-action="selectDay" data-day="07/30/2020" class="day old">30</td><td data-action="selectDay" data-day="07/31/2020" class="day old">31</td><td data-action="selectDay" data-day="08/01/2020" class="day weekend">1</td></tr><tr><td data-action="selectDay" data-day="08/02/2020" class="day weekend">2</td><td data-action="selectDay" data-day="08/03/2020" class="day">3</td><td data-action="selectDay" data-day="08/04/2020" class="day">4</td><td data-action="selectDay" data-day="08/05/2020" class="day">5</td><td data-action="selectDay" data-day="08/06/2020" class="day">6</td><td data-action="selectDay" data-day="08/07/2020" class="day">7</td><td data-action="selectDay" data-day="08/08/2020" class="day weekend">8</td></tr><tr><td data-action="selectDay" data-day="08/09/2020" class="day weekend">9</td><td data-action="selectDay" data-day="08/10/2020" class="day">10</td><td data-action="selectDay" data-day="08/11/2020" class="day">11</td><td data-action="selectDay" data-day="08/12/2020" class="day">12</td><td data-action="selectDay" data-day="08/13/2020" class="day">13</td><td data-action="selectDay" data-day="08/14/2020" class="day">14</td><td data-action="selectDay" data-day="08/15/2020" class="day weekend">15</td></tr><tr><td data-action="selectDay" data-day="08/16/2020" class="day weekend">16</td><td data-action="selectDay" data-day="08/17/2020" class="day">17</td><td data-action="selectDay" data-day="08/18/2020" class="day">18</td><td data-action="selectDay" data-day="08/19/2020" class="day">19</td><td data-action="selectDay" data-day="08/20/2020" class="day">20</td><td data-action="selectDay" data-day="08/21/2020" class="day">21</td><td data-action="selectDay" data-day="08/22/2020" class="day active today weekend">22</td></tr><tr><td data-action="selectDay" data-day="08/23/2020" class="day weekend">23</td><td data-action="selectDay" data-day="08/24/2020" class="day">24</td><td data-action="selectDay" data-day="08/25/2020" class="day">25</td><td data-action="selectDay" data-day="08/26/2020" class="day">26</td><td data-action="selectDay" data-day="08/27/2020" class="day">27</td><td data-action="selectDay" data-day="08/28/2020" class="day">28</td><td data-action="selectDay" data-day="08/29/2020" class="day weekend">29</td></tr><tr><td data-action="selectDay" data-day="08/30/2020" class="day weekend">30</td><td data-action="selectDay" data-day="08/31/2020" class="day">31</td><td data-action="selectDay" data-day="09/01/2020" class="day new">1</td><td data-action="selectDay" data-day="09/02/2020" class="day new">2</td><td data-action="selectDay" data-day="09/03/2020" class="day new">3</td><td data-action="selectDay" data-day="09/04/2020" class="day new">4</td><td data-action="selectDay" data-day="09/05/2020" class="day new weekend">5</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month active">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year active">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection