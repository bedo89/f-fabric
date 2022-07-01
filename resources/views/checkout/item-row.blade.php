<div class="row single-row">
    <div class="col-xs-1 boot-style">
        <a href="{{ asset($item->design->getWatermarkImagePath()) }}">
            <div class="body-col image" style="background-image: url('{{ asset($item->design->getThumbnailImagePath()) }}');">
            </div>
        </a>
    </div>
    <div class="col-xs-11">
        <div class="row row-minus-25">
            <div class="col-xs-5">
                <div class="body-col first">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="body-col-textarea">
                                <p class="body-col-textarea__item">{{ $item->design->title }}</p>
                                <p class="body-col-textarea__type">{{ $item->material->title . ': ' . $item->product->title }}</p>
                                <p class="body-col-textarea__code">{{ $item->designType->title }}@if ($item->design_type_id != 4) {{ 'repeat' }}@endif, {{ $item->dpi }} DPI</p>
                                <p class="body-col-textarea__code">Design Number: #{{ $item->design->friendly_id }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-md-3">
                <div class="body-col second">
                    <p class="body-col__type">{{ $item->category->title }}</p>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="body-col third">
                    <p class="body-col__qty">{{ $item->quantity }}</p>
                </div>	
            </div>
            <div class="col-xs-2 col-sm-2">
                <div class="body-col fourth">
                    <p class="body-col__total">{{ $item->formatted_gross_total }}</p>
                </div>
            </div>  
        </div> 
    </div>             							
</div>