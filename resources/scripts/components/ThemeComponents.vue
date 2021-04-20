<template>
    <section class="section section-name">
        <div class="container">
            <section class="section-buttons py-2">
                <h2>Typography</h2>
                <b-row>
                    <b-col>
                        <div class="mt-5">
                            <h5>Headings</h5>
                            <hr class="my-2 " />
                        </div>
                        <h1 class="mb-4">
                            h1. Theme Heading
                        </h1>
                        <h2 class="mb-4">
                            h2. Theme Heading
                        </h2>
                        <h3 class="mb-4">
                            h3. Theme Heading
                        </h3>
                        <h4 class="mb-4">
                            h4. Theme Heading
                        </h4>
                        <h5 class="mb-4">
                            h5. Theme Heading
                        </h5>
                        <h6 class="mb-4">
                            h5. Theme Heading
                        </h6>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col>
                        <div class="mt-5">
                            <h5>Display Headings</h5>
                            <hr class="my-2 " />
                        </div>
                        <code>.display-1</code>
                        <h1 class="display-1 mb-4">h1. Theme Heading</h1>
                        <code>.display-2</code>
                        <h2 class="display-2 mb-4">h2. Theme Heading</h2>
                        <code>.display-3</code>
                        <h3 class="display-3 mb-4">h3. Theme Heading</h3>
                        <code>.display-4</code>
                        <h4 class="display-4 mb-4">h4. Theme Heading</h4>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col>
                        <div class="mt-5">
                            <h5>Lead</h5>
                            <hr class="my-2 " />
                        </div>
                        <code>.lead</code>
                        <p class="lead">
                            Efficiently empower standardized intellectual capital without
                            cross-media services. Seamlessly supply real-time systems with 24/7
                            paradigms. Credibly leverage existing mission-critical communities
                            before excellent bandwidth. Objectively empower.
                        </p>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col>
                        <div class="mt-5">
                            <h5>Paragraph</h5>
                            <hr class="my-2 " />
                        </div>
                        <code>.font-weight-bold</code>
                        <p class="font-weight-bold">
                            Efficiently empower standardized intellectual capital without
                            cross-media services. Seamlessly supply real-time systems with 24/7
                            paradigms. Credibly leverage existing mission-critical communities
                            before excellent bandwidth. Objectively empower.
                        </p>
                        <p>
                            Assertively impact e-business quality vectors rather than functionalized
                            users. Competently plagiarize principle-centered networks and turnkey
                            web services. Uniquely reintermediate standards compliant manufactured
                            products without visionary platforms. Conveniently build dynamic
                            infrastructures whereas maintainable niche markets. Seamlessly develop
                            intuitive methods of empowerment through quality innovation.
                            Monotonectally empower distinctive methods of empowerment with virtual
                            action.
                        </p>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col>
                        <div class="mt-5">
                            <h5>Link</h5>
                            <hr class="my-2 " />
                        </div>
                        <p>Some <a href="#">link</a> to click</p>
                    </b-col>
                </b-row>
            </section>

            <section class=" py-5">
                <h2>Buttons</h2>

                <b-row>
                    <b-col md="12">
                        <div class="mt-5">
                            <h5>Sizes</h5>
                            <hr class="my-2 " />
                        </div>
                        <b-button variant="primary" size="lg">Big Button</b-button>
                        <b-button variant="primary">Base Button</b-button>
                        <b-button variant="primary" size="sm">Small Button</b-button>
                    </b-col>
                    <b-col md="12">
                        <div class="mt-5">
                            <h5>Variants</h5>
                            <hr class="my-2 " />
                        </div>
                        <b-button variant="primary">Primary</b-button>
                        <b-button variant="secondary">Secondary</b-button>
                        <b-button variant="success">Success</b-button>
                        <b-button variant="danger">Danger</b-button>
                        <b-button variant="warning">Warning</b-button>
                        <b-button variant="info">Info</b-button>
                        <b-button variant="light">Light</b-button>
                        <b-button variant="dark">Dark</b-button>
                    </b-col>
                    <b-col md="12">
                        <div class="mt-5">
                            <h5>Outline Variants</h5>
                            <hr class="my-2 " />
                        </div>
                        <b-button variant="outline-primary">Primary</b-button>
                        <b-button variant="outline-secondary">Secondary</b-button>
                        <b-button variant="outline-success">Success</b-button>
                        <b-button variant="outline-danger">Danger</b-button>
                        <b-button variant="outline-warning">Warning</b-button>
                        <b-button variant="outline-info">Info</b-button>
                        <b-button variant="outline-light">Light</b-button>
                        <b-button variant="outline-dark">Dark</b-button>
                    </b-col>
                </b-row>
            </section>

            <section class="py-5">
                <h2>Alerts</h2>

                <b-row>
                    <b-col>
                        <div class="mt-5">
                            <h5>Variants</h5>
                            <hr class="my-2 " />
                        </div>
                        <b-alert show variant="primary">Primary Alert</b-alert>
                        <b-alert show variant="secondary">Secondary Alert</b-alert>
                        <b-alert show variant="success">Success Alert</b-alert>
                        <b-alert show variant="danger">Danger Alert</b-alert>
                        <b-alert show variant="warning">Warning Alert</b-alert>
                        <b-alert show variant="info">Info Alert</b-alert>
                        <b-alert show variant="light">Light Alert</b-alert>
                        <b-alert show variant="dark">Dark Alert</b-alert> </b-col
                    ><b-col>
                        <div class="mt-5">
                            <h5>Adictional content</h5>
                            <hr class="my-2 " />
                        </div>
                        <b-alert show variant="success">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>
                                Aww yeah, you successfully read this important alert message. This
                                example text is going to run a bit longer so that you can see how
                                spacing within an alert works with this kind of content.
                            </p>
                            <hr />
                            <p class="mb-0">
                                Whenever you need to, be sure to use margin utilities to keep things
                                nice and tidy.
                            </p>
                        </b-alert>
                    </b-col>
                </b-row>
            </section>

            <section class="py-5">
                <h2>Forms</h2>

                <b-row>
                    <b-col>
                        <div>
                            <b-form>
                                <b-form-group
                                    id="input-group-1"
                                    label="Email address:"
                                    label-for="input-1"
                                    description="We'll never share your email with anyone else."
                                >
                                    <b-form-input
                                        id="input-1"
                                        type="email"
                                        placeholder="Enter email"
                                        required
                                    ></b-form-input>
                                </b-form-group>

                                <b-form-group
                                    id="input-group-2"
                                    label="Your Name:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        placeholder="Enter name"
                                        required
                                    ></b-form-input>
                                </b-form-group>

                                <b-form-group id="input-group-3" label="Food:" label-for="input-3">
                                    <b-form-select
                                        id="input-3"
                                        :options="foods"
                                        required
                                    ></b-form-select>
                                </b-form-group>

                                <b-form-group id="input-group-4">
                                    <b-form-checkbox-group id="checkboxes-4">
                                        <b-form-checkbox value="me">Check me out</b-form-checkbox>
                                        <b-form-checkbox value="that"
                                            >Check that out</b-form-checkbox
                                        >
                                    </b-form-checkbox-group>
                                </b-form-group>
                            </b-form>
                        </div>
                    </b-col>
                </b-row>
            </section>

            <section class=" py-5">
                <h2>Loading overlay</h2>

                <b-row>
                    <b-col>
                        <div>
                            <b-overlay :show="true" rounded="sm">
                                <b-card title="Card with overlay">
                                    <b-card-text
                                        >Laborum consequat non elit enim exercitation
                                        cillum.</b-card-text
                                    >
                                    <b-card-text
                                        >Click the button to toggle the overlay:</b-card-text
                                    >
                                    <b-button variant="primary">
                                        Show overlay
                                    </b-button>
                                </b-card>
                            </b-overlay>
                        </div>
                    </b-col>
                </b-row>
            </section>

            <section class=" py-5">
                <h2>Colors</h2>
                <h4></h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-primary text-white">Primary</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-secondary text-white">Secondary</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-success text-white">Success</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-danger text-white">Danger</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-warning text-white">Warning</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-info text-white">Info</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-light text-dark">Light</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-dark text-white">Dark</div>
                    </div>
                </div>

                <h2>Brand colors</h2>

                <div class="row">
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-brand-green text-white">brand-green</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-brand-cyan text-white">brand-cyan</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-brand-yellow text-white">brand-yellow</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-brand-blue text-white">brand-blue</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-brand-orange text-white">brand-orange</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-brand-orange-2 text-white">brand-orange-2</div>
                    </div>
                </div>
            </section>

            <section class=" py-5">
                <h2>Opn Popup</h2>
                <b-row>
                    <b-col>
                        <b-button v-b-modal.contact-modal>Click Me</b-button>
                    </b-col>
                </b-row>
            </section>
        </div>
    </section>
</template>
<script>
import { BButton, BAlert } from "bootstrap-vue";
export default {
    components: {
        BButton,
        BAlert,
    },
    data() {
        return {
            foods: [{ text: "Select One", value: null }, "Carrots", "Beans", "Tomatoes", "Corn"],
        };
    },
};
</script>
