'use strict';
app.service('scheduleService', ['$http', function($http) {
    var self = this;

    self.save = function(data) {
        var headers = {
            'X-OCTOBER-REQUEST-HANDLER': 'onSaveSubmit',
            'X-Requested-With': 'XMLHttpRequest'
        };
        return $http.post('', data, {headers: headers});
    };

    return {
        save: self.save
    };
}]);