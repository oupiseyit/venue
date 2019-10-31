 <form class="row mb-5">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="event_types" id="event_types" class="form-control d-block rounded-0">
                             <option value="">Event Types</option>
                            @foreach ($event_types as $event_type)
                                <option value="{{ $event_type->id }}">{{ $event_type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <input type="number" name="people_ammount" id="people_ammount" placeholder="People ammount" class="form-control d-block rounded-0">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="location" id="location" class="form-control d-block rounded-0">
                            <option value="">Location</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
                </div>
            </form>