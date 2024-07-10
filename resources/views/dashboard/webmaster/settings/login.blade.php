
<div class="tab-pane {{  ( Session::get('active_tab') == 'registrationSettingsTab') ? 'active' : '' }}"
     id="tab-4">
    <div class="p-a-md"><h5>{!!  __('backend.registrationSettings') !!}</h5></div>

    <div class="p-a-md col-md-12">


        <div class="form-group">
            <label>{{ __('backend.controlPanelPath') }} : </label>
            <div class="pull-right text-muted" dir="ltr">
                {{ config('app.url') }}/
            </div>
            {!! Form::text('backend_path',config('smartend.backend_path'), array('placeholder' => config('app.url').'/admin','class' => 'form-control backend_path', 'dir'=>'ltr')) !!}
        </div>
        <div class="form-group">
            <label>{{ __('backend.permissionForNewUsers') }} : </label>
            <select name="permission_group" id="permission_group" class="form-control c-select">
                @foreach ($PermissionsGroups as $PermissionsGroup)
                    <?php
                    ?>
                    <option
                        value="{{ $PermissionsGroup->id  }}" {{ ($PermissionsGroup->id == $WebmasterSetting->permission_group) ? "selected='selected'":""  }}>{!! $PermissionsGroup->name   !!}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group m-t-3">
            <label><h6>{{ __('backend.allowRegister') }}</h6></label>
            <div class="radio">

                <div>
                    <label class="ui-check ui-check-md">
                        {!! Form::radio('register_status','0',$WebmasterSetting->register_status ? false : true , array('id' => 'register_status2','class'=>'has-value')) !!}
                        <i class="dark-white"></i>
                        {{ __('backend.notActive') }}
                    </label>
                </div>
                <div style="margin-top: 5px;">
                    <label class="ui-check ui-check-md">
                        {!! Form::radio('register_status','1',$WebmasterSetting->register_status ? true : false , array('id' => 'register_status1','class'=>'has-value')) !!}
                        <i class="dark-white"></i>
                        {{ __('backend.active') }}
                    </label>
                </div>
            </div>
        </div>

    </div>
</div>
