<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td colspan="1">
                    <form class="well form-horizontal" method="POST">
                        <?php
                        if (isset($_POST['btnAdd'])) {
                            $class = $_POST['class'];

                        }
                        ?>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Add new Class/Section</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="class"
                                            name="class" placeholder="New class" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                    <div class="form-group text-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="btnAdd">Add Class</button>
                        </div>
                    </div>

                </td>
            </tr>
        </tbody>
    </table>
</div>