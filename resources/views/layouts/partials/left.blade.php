
        <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{{ ('admin/links/images/users/avatar-1.jpg') }}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('/') }}" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><strong style="color:green;"> POS </strong><span class="pull-right"><i class="md md-view-list"></i></span></a>
                                <ul>
                                    <li class="{{ Request::routeIs('pos') ? 'active' : '' }}"><a href="{{ route('pos') }}"> Add Pos</a></li>
                                    <li class="{{ Request::routeIs('pos.ajax') ? 'active' : '' }}"><a href="{{ route('pos.ajax') }}">Add Pos With Ajax</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Order </span><span class="pull-right"><i class="md md-view-list"></i></span></a>
                                <ul>
                                    <li class="active"><a href="{{ route('pending.order') }}"> Pending Order</a></li>
                                    <li class="active"><a href="{{ route('order.success') }}">Success Order</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Product </span><span class="pull-right"><i class="md md-view-list"></i></span></a>
                                <ul>
                                    <li class="active"><a href="{{ route('product') }}"> Add Product</a></li>
                                    <li class="active"><a href="{{ route('product.show') }}">All Product</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Category </span><span class="pull-right"><i class="md md-view-list"></i></span></a>
                                <ul>
                                    <li class="active"><a href="{{ route('category') }}"> Add Category</a></li>
                                    <li class="active"><a href="{{ route('category.show') }}">All Category</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user"></i><span> Employee </span><span class="pull-right"><i class="fa fa-user"></i></span></a>
                                <ul>
                                    <li class="active"><a href="{{ route('employee') }}"> Add Employee</a></li>
                                    <li class="active"><a href="{{ route('employee.show') }}">All Employee</a></li>
                                </ul>
                            </li>
    
                          
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user"></i> <span> Customer </span> <span class="pull-right"><i class="fa fa-user"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('customer') }}">Add Customer</a></li>
                                    <li><a href="{{ route('customer.show') }}">All Customer</a></li>
                                    
                                </ul>
                            </li>
    
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user"></i> <span> Supplier </span> <span class="pull-right"><i class="fa fa-user"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('supplier') }}">Add Supplier</a></li>
                                    <li><a href="{{ route('supplier.show') }}">All Supplier</a></li>
                                    <li><a href="{{ route('suppliertype') }}">Add Supplier Type</a></li> 
                                    <li><a href="{{ route('suppliertype.show') }}">All Supplier Type</a></li> 
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i> <span> Warehouse </span> <span class="pull-right"><i class="md md-view-list"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('warehouse') }}">Add Warehouse</a></li>
                                    <li><a href="{{ route('warehouse.show') }}">All Warehouse</a></li>
                                    <li><a href="{{ route('warehouse_section') }}">Add Warehouse Section</a></li> 
                                    <li><a href="{{ route('warehouse_section.show') }}">All Warehouse Section</a></li> 
                                </ul>
                            </li>
                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>