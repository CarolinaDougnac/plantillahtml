@extends('layouts.app')

@section('template_title')
    Nueva Factura
@endsection

@section('content')
<section class="invoice-edit-wrapper">
  <div class="row invoice-edit">
    <!-- Invoice Edit Left starts -->
    <div class="col-xl-9 col-md-8 col-12">
      <div class="card invoice-preview-card">
        <!-- Header starts -->
        <div class="card-body invoice-padding pb-0">
          <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
            <div>
              <div class="logo-wrapper">
                <svg
                  viewBox="0 0 139 95"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  height="24"
                >
                  <defs>
                    <linearGradient id="invoice-linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                      <stop stop-color="#000000" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient
                      id="invoice-linearGradient-2"
                      x1="64.0437835%"
                      y1="46.3276743%"
                      x2="37.373316%"
                      y2="100%"
                    >
                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-400.000000, -178.000000)">
                      <g transform="translate(400.000000, 178.000000)">
                        <path
                          class="text-primary"
                          d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                          style="fill: currentColor"
                        ></path>
                        <path
                          d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                          fill="url(#invoice-linearGradient-1)"
                          opacity="0.2"
                        ></path>
                        <polygon
                          fill="#000000"
                          opacity="0.049999997"
                          points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"
                        ></polygon>
                        <polygon
                          fill="#000000"
                          opacity="0.099999994"
                          points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"
                        ></polygon>
                        <polygon
                          fill="url(#invoice-linearGradient-2)"
                          opacity="0.099999994"
                          points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"
                        ></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <h3 class="text-primary invoice-logo">Revisión de Facturas</h3>
              </div><h3>{{ $factura->proveedore->nombre_proveedor }}</h3></div>
            <div class="invoice-number-date mt-md-0 mt-2">
              <div class="d-flex align-items-center justify-content-md-end mb-1">
                <h4 class="invoice-title">Folio: </h4>
                <div class="input-group input-group-merge invoice-edit-input-group">
                  <div class="input-group-text">
                    <i data-feather="hash"></i>
                  </div>
                  <input type="text" class="form-control invoice-edit-input" value="{{ $factura->folio }}"> 
                </div>
              </div>
              <div class="d-flex align-items-center mb-1">
                <span class="title">Fecha de Recepción:</span>
                <input type="date" class="form-control invoice-edit-input date-picker" value="{{ $factura->fecha_emision }}"/>
              </div>
              <div class="d-flex align-items-center">
                <span class="title">Fecha de Recepción:</span>
                <input type="date" class="form-control invoice-edit-input due-date-picker" value="{{ $factura->fecha_reception }}"/>
              </div>
            </div>
          </div>
        </div>
        <!-- Header ends -->

        <hr class="invoice-spacing" />

        <!-- Address and Contact starts -->
        <!-- Address and Contact ends -->

        <!-- Product Details starts -->
        <div class="card-body invoice-padding invoice-product-details">
          <form class="source-item">
            <div data-repeater-list="group-a">
              <div class="repeater-wrapper" data-repeater-item>
                <div class="row">
                  <div class="col-12 d-flex product-details-border position-relative pe-0">
                    <div class="row w-100 pe-lg-0 pe-1 py-2">
                      <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Producto</p>
                        <select class="form-select item-details">
                          <option value="App Design">App Design</option>
                          <option value="App Customization" selected>App Customization</option>
                          <option value="ABC Template">ABC Template</option>
                          <option value="App Development">App Development</option>
                        </select>
                        <textarea class="form-control mt-2" rows="1">Comentario</textarea>
                      </div>
                      <div class="col-lg-3 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">Precio</p>
                        <input type="number" class="form-control" value="24" placeholder="24" />
                        <div class="mt-2">
                          <span>Descuento:</span>
                          <span class="discount">0%</span>
                          <span class="tax-1 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1"
                            >0%</span
                          >
                          <span class="tax-2 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2"
                            >0%</span
                          >
                        </div>
                      </div>
                      <div class="col-lg-2 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">Cantidad</p>
                        <input type="number" class="form-control" value="1" placeholder="1" />
                      </div>
                      <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Precio</p>
                        <p class="card-text mb-0">$24.00</p>
                      </div>
                    </div>
                    <div
                      class="
                        d-flex
                        flex-column
                        align-items-center
                        justify-content-between
                        border-start
                        invoice-product-actions
                        py-50
                        px-25
                      "
                    >
                      <i data-feather="x" class="cursor-pointer font-medium-3" data-repeater-delete></i>
                      <div class="dropdown">
                        <i
                          class="cursor-pointer more-options-dropdown me-0"
                          data-feather="settings"
                          role="button"
                          id="dropdownMenuButton"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                        </i>
                        <div
                          class="dropdown-menu dropdown-menu-end item-options-menu p-1"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <div class="mb-1">
                            <label for="discount-input" class="form-label">Discount(%)</label>
                            <input type="number" class="form-control" id="discount-input" />
                          </div>
                          <div class="form-row mt-50">
                            <div class="mb-1 col-md-6">
                              <label for="tax-1-input" class="form-label">Tax 1</label>
                              <select name="tax-1-input" id="tax-1-input" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">1%</option>
                                <option value="10%">10%</option>
                                <option value="18%">18%</option>
                                <option value="40%">40%</option>
                              </select>
                            </div>
                            <div class="mb-1 col-md-6">
                              <label for="tax-2-input" class="form-label">Tax 2</label>
                              <select name="tax-2-input" id="tax-2-input" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">1%</option>
                                <option value="10%">10%</option>
                                <option value="18%">18%</option>
                                <option value="40%">40%</option>
                              </select>
                            </div>
                          </div>
                          <div class="dropdown-divider my-1"></div>
                          <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-apply-changes">Apply</button>
                            <button type="button" class="btn btn-outline-secondary">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-1">
              <div class="col-12 px-0">
                <button type="button" class="btn btn-primary btn-sm btn-add-new" data-repeater-create>
                  <i data-feather="plus" class="me-25"></i>
                  <span class="align-middle">Agregar Producto</span>
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- Product Details ends -->

        <!-- Invoice Total starts -->
        <div class="card-body invoice-padding">
          <div class="row invoice-sales-total-wrapper">
            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
              <div class="d-flex align-items-center mb-1">
                <label for="salesperson" class="form-label">Persona que recepciona:</label>
                <input type="text" class="form-control ms-50" id="salesperson" placeholder="Edward Crowley" />
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
            <table>
                <tbody>
                    <tr>
                    <td class="pe-1">Subtotal:</td>
                    <td>$18.000</td>
                    </tr>
                    <tr>
                    <td class="pe-1">IVA:</td>
                    <td>$3.500</td>
                    </tr>
                    <tr>
                    <td class="pe-1">Total:</td>
                    <td>$21.500</td>
                    </tr>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Invoice Total ends -->

        <hr class="invoice-spacing mt-0" />

        <div class="card-body invoice-padding py-0">
          <!-- Invoice Note starts -->
          <div class="row">
            <div class="col-12">
              <div class="mb-2">
                <label for="note" class="form-label fw-bold">Nota:</label>
                <textarea class="form-control" rows="2" id="note">
                  Comentario de la factura
                </textarea>
              </div>
            </div>
          </div>
          <!-- Invoice Note ends -->
        </div>
      </div>
    </div>
    <!-- Invoice Edit Left ends -->

    <!-- Invoice Edit Right starts -->
    <div class="col-xl-3 col-md-4 col-12">
      <div class="card">
        <div class="card-body">
          <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
            Guardar
          </button>
          <a href="{{url('app/invoice/preview')}}" class="btn btn-outline-primary w-100 mb-75">Preview</a>
        </div>
      </div>
       </div>
    </div>
    <!-- Invoice Edit Right ends -->
  </div>

  <!-- Send Invoice Sidebar -->
  <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
      <div class="modal-content p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title">
            <span class="align-middle">Send Invoice</span>
          </h5>
        </div>
        <div class="modal-body flex-grow-1">
          <form>
            <div class="mb-1">
              <label for="invoice-from" class="form-label">From</label>
              <input
                type="text"
                class="form-control"
                id="invoice-from"
                value="shelbyComapny@email.com"
                placeholder="company@email.com"
              />
            </div>
            <div class="mb-1">
              <label for="invoice-to" class="form-label">To</label>
              <input
                type="text"
                class="form-control"
                id="invoice-to"
                value="qConsolidated@email.com"
                placeholder="company@email.com"
              />
            </div>
            <div class="mb-1">
              <label for="invoice-subject" class="form-label">Subject</label>
              <input
                type="text"
                class="form-control"
                id="invoice-subject"
                value="Invoice of purchased Admin Templates"
                placeholder="Invoice regarding goods"
              />
            </div>
            <div class="mb-1">
              <label for="invoice-message" class="form-label">Message</label>
              <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11">
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of $95.59

We would appreciate payment of this invoice by 05/11/2019</textarea
              >
            </div>
            <div class="mb-1">
              <span class="badge badge-light-primary">
                <i data-feather="link" class="me-25"></i>
                <span class="align-middle">Invoice Attached</span>
              </span>
            </div>
            <div class="mb-1 d-flex flex-wrap mt-2">
              <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Send Invoice Sidebar -->

  <!-- Add Payment Sidebar -->
  <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
      <div class="modal-content p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title">
            <span class="align-middle">Add Payment</span>
          </h5>
        </div>
        <div class="modal-body flex-grow-1">
          <form>
            <div class="mb-1">
              <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
            </div>
            <div class="mb-1">
              <label class="form-label" for="amount">Payment Amount</label>
              <input id="amount" class="form-control" type="number" placeholder="$1000" />
            </div>
            <div class="mb-1">
              <label class="form-label" for="payment-date">Payment Date</label>
              <input id="payment-date" class="form-control date-picker" type="text" />
            </div>
            <div class="mb-1">
              <label class="form-label" for="payment-method">Payment Method</label>
              <select class="form-select" id="payment-method">
                <option value="" selected disabled>Select payment method</option>
                <option value="Cash">Cash</option>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="Debit">Debit</option>
                <option value="Credit">Credit</option>
                <option value="Paypal">Paypal</option>
              </select>
            </div>
            <div class="mb-1">
              <label class="form-label" for="payment-note">Internal Payment Note</label>
              <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
            </div>
            <div class="d-flex flex-wrap mb-0">
              <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Payment Sidebar -->
</section>
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-invoice.js')}}"></script>
@endsection