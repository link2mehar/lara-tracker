<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <livewire:styles />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-wrap bg-gray-100 w-full h-screen">
            
            @include('layouts.navigation')

            <main class="w-10/12">
                <div class="bg-white p-4">
                    <div class="container mx-auto">
                        Nav
                    </div>
                </div>
                <div class="p-4 text-gray-500">
                    @yield('content')
                </div>
            </main>
        </div>
        <livewire:scripts />
        <script>
            const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        
            function app() {
              return {
                showDatepicker: false,
                datepickerValue: '',
                month: '',
                year: '',
                no_of_days: [],
                blankdays: [],
                days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                initDate() {
                  let today = new Date();
                  this.month = today.getMonth();
                  this.year = today.getFullYear();
                  this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                },
                isToday(date) {
                  const today = new Date();
                  const d = new Date(this.year, this.month, date);
                  return today.toDateString() === d.toDateString() ? true : false;
                },
                getDateValue(date) {
                  let selectedDate = new Date(this.year, this.month, date);
                  this.datepickerValue = selectedDate.toDateString();
                  this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + selectedDate.getMonth()).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
                  console.log(this.$refs.date.value);
                  this.showDatepicker = false;
                },
                getNoOfDays() {
                  let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
                  // find where to start calendar day of week
                  let dayOfWeek = new Date(this.year, this.month).getDay();
                  let blankdaysArray = [];
                  for (var i = 1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                  }
                  let daysArray = [];
                  for (var i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                  }
                  this.blankdays = blankdaysArray;
                  this.no_of_days = daysArray;
                }
              }
            }
          </script>
    </body>
</html>
