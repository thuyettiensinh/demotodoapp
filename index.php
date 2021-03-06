<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="../LIBRARY/vue.min.js"></script>
</head>

<body>
    <!---->
    <div id="app">
        <div class="container">
            <div class="jumbotron">
                <h2 class="text-center">Todos</h2>
                <div class="panel panel-primary">
                    <div class="panel-heading"><span class="glyphicon glyphicon-paperclip"></span> Demo todo app with Vue.js</div>
                    <div class="panel-body">
                        <div class="row container">
                            <label for="txttodo">Name: </label>
                            <input type="text" id="txttodo" placeholder="What you want to do ?" class="form-control" v-on:keyup.enter="addTodo()" v-model="todoText">
                        </div>
                        <hr>
                        <div class="row contaner">
                            <!--binding data-->
                            <div class="col-md-6">
                                <label for="">Todos list:</label>
                                <ul class="list-group">
                                    <!--all todos-->
                                    <li class="list-group-item btnDel" v-for="item in todos" v-show="isAll">
                                        <todo-list v-bind:item="item" v-bind:class="{ complete: item.status }"></todo-list>
                                        <a title="Delete" class="pull-right" v-on:click="deleteTodo(item)">X</a>
                                        <a title="Complete" class="pull-right" v-on:click="completeTodo(item)">V</a>
                                    </li>
                                    <!--active todos-->
                                    <li class="list-group-item btnDel" v-for="item in activeTodoList" v-show="isActive">
                                        <todo-list v-bind:item="item"></todo-list>
                                        <a title="Delete" class="pull-right" v-on:click="deleteTodo(item)">X</a>
                                        <a title="Complete" class="pull-right" v-on:click="completeTodo(item)">V</a>
                                    </li>
                                    <!--complete todos-->
                                    <li class="list-group-item btnDel" v-for="item in completeTodoList" v-show="isComplete">
                                        <todo-list v-bind:item="item" class="complete"></todo-list>
                                        <a title="Delete" class="pull-right" v-on:click="deleteTodo(item)">X</a>
                                        <a title="Complete" class="pull-right" v-on:click="completeTodo(item)">V</a>
                                    </li>
                                    <div class="col-md-2 del" v-show="isComplete">
                                        <button type="button" class="btn btn-sm btn-danger" v-on:click="deleteAllComplete">Delete all complete <span class="badge">{{ completeTodoList.length }}</span></button>
                                    </div>
                                </ul>
                            </div>
                            <!--something-->
                            <div class="col-md-4 col-xs-offset-1">
                                <div class="btn-group  btn-group-justified" role="group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info" v-on:click="allTodoList">All <span class="badge">{{ todos.length }}</span></button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning" v-on:click="activeList">Active <span class="badge">{{ activeTodoList.length }}</span></button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success" v-on:click="completeList">Complete <span class="badge">{{ completeTodoList.length }}</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <script src="main.js"></script>
</body>

</html>
