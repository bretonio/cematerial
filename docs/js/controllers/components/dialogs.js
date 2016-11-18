angular.module('docs').controller('components.dialogsCtrl', function ($scope) {
    $scope.$parent.title = 'Dialogs';

    $scope.codes = {
        basic: (
            '<button class="btn bg-blue-6" type="button" data-toggle="dialog" data-target="#dialog1">' + "\n" +
            '    Open Dialog' + "\n" +
            '</button>' + "\n" +
            '<div id="dialog1" class="dialog">' + "\n" +
            '    <div class="dialog-header">' + "\n" +
            '        <h3 class="dialog-title">My Dialog</h3>' + "\n" +
            '    </div>' + "\n" +
            '    <div class="dialog-body">' + "\n" +
            '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur, delectus deserunt earum error fugit iusto qui sit ut veniam. Alias at cupiditate enim est et iste necessitatibus neque ut.' + "\n" +
            '    </div>' + "\n" +
            '    <div class="dialog-footer">' + "\n" +
            '        <button class="btn btn-flat text-blue-6" type="button" data-toggle="dialog">' + "\n" +
            '            Cancel' + "\n" +
            '        </button>' + "\n" +
            '        <button class="btn btn-flat text-blue-6" type="button">' + "\n" +
            '            Confirm' + "\n" +
            '        </button>' + "\n" +
            '    </div>' + "\n" +
            '</div>'
        ),
        sizes: (
            '<button class="btn bg-blue-6" type="button" data-toggle="dialog" data-target="#dialog2">' + "\n" +
            '    Open Dialog' + "\n" +
            '</button>' + "\n" +
            '<div id="dialog2" class="dialog xs-col-10 sm-col-8 md-col-6">' + "\n" +
            '    <div class="dialog-header">' + "\n" +
            '        <h3 class="dialog-title">My Dialog</h3>' + "\n" +
            '    </div>' + "\n" +
            '    <div class="dialog-body">' + "\n" +
            '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur, delectus deserunt earum error fugit iusto qui sit ut veniam. Alias at cupiditate enim est et iste necessitatibus neque ut.' + "\n" +
            '    </div>' + "\n" +
            '    <div class="dialog-footer">' + "\n" +
            '        <button class="btn btn-flat text-blue-6" type="button" data-toggle="dialog">' + "\n" +
            '            Cancel' + "\n" +
            '        </button>' + "\n" +
            '        <button class="btn btn-flat text-blue-6" type="button">' + "\n" +
            '            Confirm' + "\n" +
            '        </button>' + "\n" +
            '    </div>' + "\n" +
            '</div>'
        ),
        multiple: (
            '<button class="btn bg-blue-6" type="button" data-toggle="dialog" data-target="#dialog3">' + "\n" +
            '    Open Dialog' + "\n" +
            '</button>' + "\n" +
            '<div id="dialog3" class="dialog xs-col-10 sm-col-8 md-col-6">' + "\n" +
            '    <div class="dialog-header">' + "\n" +
            '        <h3 class="dialog-title">My Dialog</h3>' + "\n" +
            '    </div>' + "\n" +
            '    <div class="dialog-body">' + "\n" +
            '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur, delectus deserunt earum error fugit iusto qui sit ut veniam. Alias at cupiditate enim est et iste necessitatibus neque ut.' + "\n" +
            '    </div>' + "\n" +
            '    <div class="dialog-footer">' + "\n" +
            '        <button class="btn btn-flat text-blue-6" type="button" data-toggle="dialog" data-target="#dialog4">' + "\n" +
            '            Open Dialog Over' + "\n" +
            '        </button>' + "\n" +
            '    </div>' + "\n" +
            '</div>' + "\n" +
            '<div id="dialog4" class="dialog">' + "\n" +
            '    <div class="dialog-body">' + "\n" +
            '        Hello World!' + "\n" +
            '    </div>' + "\n" +
            '</div>'
        )
    }
});