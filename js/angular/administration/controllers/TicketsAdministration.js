angular
    .module('helpDesk')
    .controller('TicketsAdministration', ticketsAdministration);

ticketsAdministration.$inject = ['$scope', '$rootScope'];

function ticketsAdministration($scope, $rootScope) {
    'use strict';
    // show administration option as active
    $rootScope.select(2);
    
}