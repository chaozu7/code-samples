
var baseUrl = 'https://kodilla.com/pl/bootcamp-api';
var myHeaders = {
    'X-Client-Id': 1860,
    'X-Auth-Token': '02b69ae505323f4d710d2bbdfba9baea'
};

$(function() {
    function randomString() { 
        var chars = '0123456789abcdefghiklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXTZ';
        var str = '';
        for (i = 0; i < 10; i++) {
            str += chars[Math.floor(Math.random() * chars.length)];
        }
        return str;
    }

    function Column(name) {
        var self = this; 

        this.id = randomString();
        this.name = name;
        this.$element = createColumn();

        function createColumn() {
            var $column = $('<div>').addClass('column');
            var $columnTitle = $('<h2>').addClass('column-title').text(self.name);
            var $columnCardList = $('<ul>').addClass('column-card-list');
            var $columnDelete = $('<button>').addClass('btn-delete').text('x');
            var $columnAddCard = $('<button>').addClass('add-card').text('Dodaj kartę');

            $columnDelete.click(function() {
                self.removeColumn();
            });
            $columnAddCard.click(function() {
                self.addCard(new Card(prompt("Wpisz nazwę karty")));
            });
            $column.append($columnTitle)
                .append($columnDelete)
                .append($columnAddCard)
                .append($columnCardList);
            return $column;
        }
    }

    Column.prototype = {
        addCard: function(card) {
            this.$element.children('ul').append(card.$element);
        },
        removeColumn: function() {
            this.$element.remove();
        }
    };

    function Card(description) {
        var self = this;

        this.id = randomString();
        this.description = description;
        this.$element = createCard(); //

        function createCard() {
            var $card = $('<li>').addClass('card');
            var $cardDescription = $('<p>').addClass('card-description').text(self.description);
            var $cardDelete = $('<button>').addClass('btn-delete').text('x');

            $cardDelete.click(function(){
                self.removeCard();
            });

            $card.append($cardDelete)
                .append($cardDescription);
            return $card;            
        }
    }

    Card.prototype = {
        removeCard: function() {
            this.$element.remove();
        }
    };

    function createBoard(name) {   
        var randomBoardId = 'board-'+randomString(),
            randomAddColumnId = 'create-column-' + randomString(),
            boardHTML = '\
            <div id="' + randomBoardId + '" class="board"> \
                <div class="navi"> \
                    <h2>' + name + '</h2> \
                </div> \
                <button id="' + randomAddColumnId + '" type="button" class="create-column btn btn-primary btn-lg-active">Dodaj kolumnę</button> \
                <div class="column-container"></div> \
            </div>';

        $('body').append(boardHTML);

        var board = {
            name: name,
            addColumn: function(column) {
              this.$element.append(column.$element);
              initSortable();
            },
            $element: $('#' + randomBoardId +' .column-container')
        };
        
        $('#' + randomAddColumnId).click(function() {
            var name = prompt('Wpisz nazwę kolumny');
            var column = new Column(name);
                board.addColumn(column);
        }); 

        return board;        
    }

    function initSortable() {
        $('.column-card-list').sortable({
          connectWith: '.column-card-list',
          placeholder: 'card-placeholder'
        }).disableSelection();
    }

    $('#new-board').click(function() {
        var boardName = prompt('Nazwa board\'a:');

        createBoard(boardName);
    });    

    var board1 = createBoard(prompt('Podaj nazwę pierwszego board\'a'));;

    var todoColumn = new Column('Do zrobienia');
    var doingColumn = new Column('W trakcie');
    var doneColumn = new Column('Zrobione');

    board1.addColumn(todoColumn);
    board1.addColumn(doingColumn);
    board1.addColumn(doneColumn);

    var card1 = new Card('Nowe zadanie');
    var card2 = new Card('Nowe zadanie');

    todoColumn.addCard(card1);
    doingColumn.addCard(card2);

});