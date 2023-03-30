  <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
      <!--begin::Banner settings-->
      <div class="card card-flush py-4">
          <!--begin::Card header-->
          <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                  <h2>Banner Image </h2>
              </div>
              <!--end::Card title-->
          </div>
          <!--end::Card header-->
          <!--begin::Card body-->
          <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <!--begin::Image input placeholder-->
              @if (@$banner->image->name)
                  <style>
                      .image-input-placeholder {
                          background-image: url({{ asset('assets/image/banner/original/') }}/{{ @$banner->image->name }});
                      }
                  </style>
              @else
                  <style>
                      .image-input-placeholder {
                          background-image: url('{{ asset('assets/media/svg/files/blank-image.svg') }}');
                      }

                      [data-theme="dark"] .image-input-placeholder {
                          background-image: url('{{ asset('assets/media/svg/files/blank-image-dark.svg') }}');
                      }
                  </style>
              @endif
              <!--end::Image input placeholder-->
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                  data-kt-image-input="true">
                  <!--begin::Preview existing avatar-->
                  <div class="image-input-wrapper w-150px h-150px"></div>
                  <!--end::Preview existing avatar-->
                  <!--begin::Label-->
                  <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                      data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                      <!--begin::Icon-->
                      <i class="bi bi-pencil-fill fs-7"></i>
                      <!--end::Icon-->
                      <!--begin::Inputs-->
                      <input type="file" name="banner" id="imageInput" accept=".png, .jpg, .jpeg" />
                      <!--end::Inputs-->
                  </label>
                  <!--end::Label-->
                  <!--begin::Cancel-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                      data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                      <i class="bi bi-x fs-2"></i>
                  </span>
                  <input type="hidden" name="banner_id" value="{{ @$banner->banner->banner->id }}" id="image_id">

                  <!--end::Cancel-->
                  <!--begin::Remove-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                      data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                      <i class="bi bi-x fs-2"></i>
                  </span>
                  <!--end::Remove-->
              </div>
              <!--end::Banner Image input-->
              <!--begin::Description-->

              <div class="fv-plugins-message-container invalid-feedback">
                  <div data-field="category_name" data-validator="notEmpty"> @error('banner_image')
                          {{ $message }}
                      @enderror
                  </div>
              </div>
              <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files
                  are accepted</div>
              <!--end::Description-->
          </div>
          <!--end::Card body-->
      </div>
      <!--end::Thumbnail settings-->

  </div>
  <!--end::Aside column-->
  <!--begin::Main column-->
  <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
      <!--begin::General options-->
      <div class="card card-flush py-4">
          <!--begin::Card header-->
          <div class="card-header">
              <div class="card-title">
                  <h2>General</h2>
              </div>
          </div>
          <!--end::Card header-->
          <!--begin::Card body-->
          <div class="card-body pt-0">
              <!--begin::Input group-->
              <div class="row g-3">
                  <div class="mb-10 fv-row col-6">
                      <!--begin::Label-->
                      <label class="required form-label">Banner Name</label>
                      <!--end::Label-->
                      <div class="">
                          <!--begin::Input-->
                          <input type="text" name="title" class="form-control mb-2" placeholder="Product name"
                              value="{{ @$banner->title }}" />
                          <!--end::Input-->
                          <!--begin::Description-->
                          <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
                          <!--end::Description-->

                      </div>
                  </div>

              </div>

              <!--begin::Input group-->

              <!--begin::Input group-->
              <div class="row g-3">
                  <div class="mb-10 fv-row col-6">
                      <!--begin::Label-->
                      <label class="required form-label">Banner URL</label>
                      <!--end::Label-->
                      <div class="">
                          <!--begin::Input-->
                          <input type="text" name="url" class="form-control mb-2" placeholder="Banner url"
                              value="{{ @$banner->url }}" />
                          <!--end::Input-->
                          <!--begin::Description-->
                          <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
                          <!--end::Description-->

                      </div>
                  </div>

              </div>

              <!--begin::Input group-->
              <div class="fv-row">
                  <!--begin::Label-->
                  <label class="form-label">Description</label>
                  <!--end::Label-->
                  <!--begin::Editor-->
                  <textarea name="description" class="form-control">{{ @$banner->description }}</textarea>
                  <!--end::Editor-->
                  <!--begin::Description-->
                  <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
                  <!--end::Description-->
              </div>
              <!--end::Input group-->

          </div>
          <!--end::Card header-->
      </div>
      <!--end::General options-->

      <div class="d-flex justify-content-end">
          <!--begin::Button-->
          <a href="{{ route('banner.index') }}" class="btn btn-light me-5">Cancel</a>
          <!--end::Button-->
          <button type="submit" class="btn btn-primary" id="submit">
              <!--begin::Indicator label-->
              <span class="indicator-label">Save</span>
              <!--end::Indicator label-->
              <!--begin::Indicator progress-->
              <span class="indicator-progress">Please wait...
                  <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              <!--end::Indicator progress-->
          </button>
          <!--end::Button-->
      </div>
  </div>
