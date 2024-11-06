@extends('backend.layouts.main')
@section('main-container')
  <script type="text/javascript">jQuery.noConflict();</script> 

         <div class="main-content">
          <div class="breadcrumb">
              @role('Student')
            <h1 class="me-2">Student Panel</h1>
            @endrole
            <h1 class="me-2">Admin Panel</h1>
            <ul>
              <li><a href="">Dashboard</a></li>
            </ul>
          </div>
          <div class="separator-breadcrumb border-top"></div>
                
          <div class="flex-grow-1"></div>
          <!-- fotter end -->
        </div>
        <script>
          "use strict";

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(source, true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(source).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


document.addEventListener('DOMContentLoaded', function() {
    
  var echartElem1 = document.getElementById('echart1');

  if (echartElem1) {
    var echart1 = echarts.init(echartElem1);
    echart1.setOption(_objectSpread({}, echartOptions.defaultOptions, {}, {
      grid: echartOptions.gridAlignLeft,
      series: [_objectSpread({
        data: [30, 40, 20, 50, 40, 80, 90, 40]
      }, echartOptions.smoothLine, {
        lineStyle: _objectSpread({
          color: '#4CAF50'
        }, echartOptions.lineShadow),
        itemStyle: {
          color: '#4CAF50'
        }
      })]
    }));
    
  }

  
}, false);
        </script>

<script>
  function redirectToEnquiryData() {
      window.location.href = "{{ route('enquiry-data') }}"; // Replace 'enquiry-data' with your actual route name
  }
</script>

@endsection 
