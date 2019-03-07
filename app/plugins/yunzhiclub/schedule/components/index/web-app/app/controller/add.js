'use strict';
app.controller('AddCtrl', ['scheduleService', '$scope', function (scheduleService, $scope) {
    var self = this;
    $scope.isOpen = true;

    self.states = {
        unSubmit: 'unSubmit',
        submitting: 'submitting',
        submitted: 'submitted'
    };

    self.init = function () {
        self.initData();
    };


    self.initData = function() {
        $scope.state = self.states.unSubmit;
        $scope.data = {
            name: '',
            lab: '',
            course: '',
            klasses: ''
        };
    };

    self.showByState = function(state) {
        if (state === $scope.state) {
            return true;
        } else {
            return false;
        }
    };

    self.submit = function () {
        $scope.state = self.states.submitting;
        scheduleService.save()
            .then(function success() {
                $scope.state = self.states.submitted;
            }, function error(response) {
                console.log(response);
                $scope.state = self.states.submitted;
            });
    };

    self.init();
    $scope.initData = self.initData;
    $scope.showByState = self.showByState;
    $scope.submit = self.submit;
}]);