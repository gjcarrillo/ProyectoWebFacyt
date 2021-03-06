'use strict';

/**
 * @ngdoc function
 * @name reportesApp.controller:ListtimeCtrl
 * @description
 * # ListtimeCtrl
 * Controller of the reportesApp
 */
angular.module('helpDesk')
  .controller('ListtimeCtrl',['$scope','$http', '$rootScope',
  function ($scope,$http, $rootScope) {

     'use strict';

    var currentTime = new Date();
    $scope.currentTime = currentTime;
    $scope.month = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $scope.monthShort = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
    $scope.weekdaysFull = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    $scope.weekdaysLetter = ['D', 'L', 'M', 'M', 'J', 'V', 'S'];
    $scope.disable = [false, 1, 7];
    $scope.today = 'Today';
    $scope.clear = 'Clear';
    $scope.close = 'Close';
    var days = 600;
    $scope.minDate = (new Date($scope.currentTime.getTime() - ( 1000 * 60 * 60 *24 * days ))).toISOString();
    $scope.maxDate = (new Date($scope.currentTime.getTime() + ( 1000 * 60 * 60 *24 * days ))).toISOString();
    // show administration option as active
    $rootScope.select(6);
    // close mobile sideNav
    $('.button-collapse').sideNav('hide');
    $scope.loading = false;
    $scope.ticketSelected = false;
    $scope.edit = false;
    $scope.selected = [];
    $scope.result = false;
    $scope.todas = '-';
    $scope.enEspera = '-';
    $scope.atendidas = '-';
    $scope.excedidas = '-';

    $scope.query = {
        order: 'subject',
        limit: 5,
        page: 1
    };

    $scope.getTicketsForDate = function () {
      $http.get('index.php/reportes/ListtimeController/getTicketsForDate' , {params : {from:$scope.model.from , to:$scope.model.to}})
        .then(function (response){
            if (response.data.message== "success") {
                $scope.tickets = response.data.tickets;
                $scope.todas = response.data.todas;
                $scope.enEspera = response.data.enEspera;
                console.log($scope.enEspera);
                $scope.atendidas = response.data.atendidas;
                $scope.excedidas = response.data.excedidas;
                console.log(response);
                console.log($scope.tickets);
                if(typeof $scope.tickets !== 'undefined'){
                  $scope.result = true;
                  $scope.noData = false;
                }else {
                  $scope.result = false;
                  $scope.noData = true;
                }
            }
        })
    }
    // The higer the better
    $scope.goodProgressTheme = function(value) {
        var porcentage = parseInt(value, 10);
        if (isNaN(porcentage)) {
            return 'inactive-bar';
        } else if (porcentage <= 20) {
            return 'red-bar';
        }else if (porcentage <= 70) {
            return 'orange-bar';
        } else {
            return 'teal-bar';
        }
    }
    // The higer the badder
    $scope.badProgressTheme = function (value){
        var porcentage = parseInt(value, 10);
        if (isNaN(porcentage)) {
            return 'inactive-bar';
        } else if (porcentage <= 20) {
            return 'teal-bar';
        }else if (porcentage <= 70) {
            return 'orange-bar';
        } else {
            return 'red-bar';
        }
    }

    $scope.selectItem = function(item) {
        setTimeout(prueba(item), 1000);
    }

    $scope.onOpenDatePicker = function () {
      $('#mainContent').css('padding-bottom', '300px');
    }
    $scope.onCloseDatePicker = function () {
      $('#mainContent').css('padding-bottom', '0px');
    }
    function prueba(item) {
        $scope.model.id = item.id;
            $scope.model.paddedId = item.paddedId;
            $scope.model.subject = item.subject;
            $scope.model.description =item.description;
            $scope.model.type = item.type;
            $scope.model.level = item.level;
            $scope.model.priority = item.priority;
            $scope.model.state = item.state;
            $scope.model.answerTime = item.answerTime;
            $scope.model.qualityOfService = item.qualityOfService;
            $scope.model.evaluation = item.evaluation;
            if(typeof item.userAssigned != 'undefined') {
                $scope.model.userAssigned = item.userAssigned;
            } else {
               $scope.model.userAssigned = null;
            }

            $scope.searchText = "";

            if(item.submitDate != null) {
              var  date =  new Date(item.submitDate.date);
              $scope.model.submitDate = date.getDate()+'/'+date.getMonth()+'/'+date.getFullYear();
            }
            if(item.closeDate != null) {
              var  date =  new Date(item.closeDate.date);
               $scope.model.closeDate = date.getDate()+'/'+date.getMonth()+'/'+date.getFullYear();
            }else {
                $scope.model.closeDate = "";
            }
            $scope.model.department = item.department;
            $scope.model.userReporter = item.userReporter
            $scope.ticketSelected = true;
    }

    $scope.clearModel = function() {
        $scope.ticketSelected = false;
        $scope.selected = [];
    }
    $scope.deselectItem = function() {
        $scope.ticketSelected = false;
    }

    $scope.viewMode = function() {
        $scope.edit = false;
    }

    $scope.editMode = function(){
        $scope.edit =true;
    }

  }]);
