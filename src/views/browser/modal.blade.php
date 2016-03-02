<div id="modal-image-browser" class="uk-modal">
    <div class="uk-modal-dialog uk-modal-dialog-blank uk-modal-dialog-large">
        <div class="uk-modal-header">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-1-1 uk-width-medium-1-2">
                    <span class="title">Image Browser</span>
                </div>
                <div class="uk-width-1-1 uk-width-medium-1-2 uk-text-right">
                    <button type="button" class="uk-button cancel">Cancel</button>
                    <button type="button" class="uk-button uk-button-primary done">Done</button>
                </div>
            </div>

            <div id="upload-drop" class="uk-placeholder uk-text-center">
                <i class="uk-icon-cloud-upload uk-icon-medium uk-text-muted uk-margin-small-right"></i>
                Drag images here or <a class="uk-form-file">selecting one<input id="upload-select" type="file"></a>. (20Mb Max)
            </div>

            <div id="progressbar" class="uk-progress uk-hidden">
                <div class="uk-progress-bar" style="width: 0%;">...</div>
            </div>
        </div>

        <div class="uk-overflow-container">
            <div id="image-browser-images" class="uk-grid-width-1-2 uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-6">
                @each('laramanager::browser.image', $images, 'image')
            </div>
        </div>

        <div class="uk-modal-footer uk-text-right">
            <div id="selected-images" class="uk-placeholder">
                <div class="uk-grid uk-sortable images" data-uk-sortable>
                </div>
            </div>
        </div>
    </div>
</div>