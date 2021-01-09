@extends('layouts.frontend')

@section('meta.title', t('General terms and conditions') . ' | PrevHelp')

@section('body')

    <div class="container">

        <div class="row">
            <div class="col">
                <p>
                    <h4>{{ t('General terms and conditions for courses and consultations') }}</h4>
                </p>
                <br />
                <p>
                    <em>{{ t('The exclusive language available for the conclusion of the contract shall be German. Translations of these terms and conditions to other languages are for information only. In the event of contradictions between the German text and the translations, the German text shall prevail.') }}</em>
                </p>
                <br />
                <p>
                    <strong>1 {{ t('Scope') }}</strong>
                </p>
                <p>
                    (1) {{ t('The following general terms and conditions apply to all legal transactions with consumers and companies with') }}<br />
                    <br />
                    PrevHelp<br />
                    Holger Schmermbeck<br />
                    Edith-Stein-Str. 52<br />
                    42329 Wuppertal<br/>
                    <br />
                    {{ t('hereinafter referred to as PrevHelp or we. The legal transactions can come about by phone, email, or via the website.') }}
                </p>

                <p>
                    (2) {{ t('The language available for the conclusion of the contract is exclusively German. Translations into other languages are for your information only. The German text has priority in the event of any differences in linguistic usage.') }}
                </p>
                <br />
                <p>
                    <strong>2 {{ t('Applicable law and consumer protection regulations') }}</strong>
                </p>

                <p>
                    (1) {{ t('The law of the Federal Republic of Germany applies under exclusion of international private law and the to German law applicable UN sales law, if') }}<br />
                    <br />
                    a) {{ t('you have your habitual residence in Germany or') }}<br />
                    <br />
                    b) {{ t('your habitual residence is in a country that is not a member of the European Union.') }}
                </p>

                <p>
                    (2) {{ t('In the event that you are a consumer within the meaning of § 13 BGB and you have your habitual residence in a member state of the European Union, the applicability of German law also applies, whereby mandatory provisions of the state in which you have your habitual residence remain unaffected stay.') }}<br />
                    <br />
                    {{ t('A consumer within the meaning of the following regulations is any natural person who concludes a legal transaction for purposes that can predominantly neither be attributed to their commercial nor their independent professional activity. An entrepreneur is any natural or legal person or a legal partnership who is exercising their independent professional or commercial activity when concluding a legal transaction.') }}
                </p>

                <p>
                    (3) {{ t('The version of these GTC valid at the time of the order applies.') }}
                </p>

                <p>
                    (4) {{ t('The prices at the time of booking a course or advice apply.') }}
                </p>

                <p>
                    (5) {{ t('If certain discounts or special offers are advertised, these are limited in time or quantity. There is no entitlement to it.') }}
                </p>
                <br />
                <p>
                    <strong>3 {{ t('Subject matter of the contract and general information') }}</strong>
                </p>

                <p>
                    (1) {{ t('The subject of the contract are the following services:') }}<br />
                    <br />
                    - {{ t('our courses') }}<br />
                    <br />
                    - {{ t('our advisory services') }}<br />
                </p>

                <p>
                    (2) {{ t('The following courses are currently offered:') }}<br />
                    <br />
                    - {{ t('First aid training and advanced training') }}<br />
                    <br />
                    - {{ t('First aid on the child') }}<br />
                    <br />
                    - {{ t('AED & resuscitation training') }}<br />
                    <br />
                    - {{ t('Training for Caregivers') }}<br />
                    <br />
                    {{ t('(this list is not exhaustive)') }}
                </p>
                <br />
                <p>
                    <strong>4 {{ t('Conclusion of the contract') }}</strong>
                </p>

                <p>
                    4.1 {{ t('The following applies to bookings made verbally, by telephone, in writing, by e-mail, or via the contact form:') }}<br />
                    <br />
                    (1) {{ t('The subject of the contract is the implementation of courses or individual advice.') }}<br />
                    <br />
                    (2) {{ t('All offers on the Internet are non-binding and do not represent a legally binding offer to conclude a contract.') }}<br />
                    <br />
                    (3) {{ t('offer') }}<br />
                    <br />
                    {{ t('With the booking, you offer PrevHelp the conclusion of a consulting contract or a binding course booking.') }}<br />
                    <br />
                    {{ t('You also declare that you have read and accepted these terms and conditions.') }}<br />
                </p>

                <p>
                    (4) {{ t('Adoption:') }}<br />
                    <br />
                    {{ t('The contract between us is concluded when you receive our confirmation, either in text form by email or, if you wish, by post.') }}
                </p>
                <br />
                <p>
                    <strong>5 {{ t('Collection, storage, and processing of your personal data') }}</strong>
                </p>

                <p>
                    (1) {{ t('To carry out and process a booking, we need the following data from you:') }}<br />
                    <br />
                    - {{ t('e-mail address') }}<br />
                    <br />
                    - {{ t('First and Last Name') }}<br />
                    <br />
                    - {{ t('date of birth') }}<br />
                    <br />
                    - {{ t('if necessary, address data') }}
                </p>

                <p>
                    (2) {{ t('Without your separate consent, we will use the data you have provided exclusively to fulfill and process your booking, such as delivering the invoice or issuing a certificate of attendance. When paying by credit card, we also use your credit card details to process payments. Any further use of your personal data for the purposes of advertising, market research, or to tailor our offers to meet your needs requires your express consent.') }}<br />
                    <br />
                    {{ t('You have the option of giving this consent before placing the order. This declaration of consent is voluntary, and you can revoke it at any time.') }}
                </p>

                <p>
                    (3) {{ t('Without your separate consent, we will only save the data within the framework of our tax and commercial law obligations or any employer\'s liability insurance association regulations.') }}
                </p>
                <br />
                <p>
                    <strong>6 {{ t('Right of revocation for consumers') }}</strong>
                </p>

                <p>
                    (1) {{ t('As a consumer, you have a right of revocation by the instructions listed in the appendix.') }}<br />
                    <br />
                    {{ t('A consumer is any natural person who concludes a legal transaction for predominantly neither commercial nor independent professional activity.') }}
                </p>

                <p>
                    (2) {{ t('The withdrawal period begins with the conclusion of the contract. The contract is concluded at the moment when you receive the confirmation of the booking of the course or the advice from us.') }}<br />
                    <br />
                    {{ t('You can cancel your booking free of charge within 14 days, whereby sending the relevant form is sufficient to meet the deadline.') }}
                </p>

                <p>
                    (3) {!! html_entity_decode(t('You can find the separate cancellation form and instructions <a href=":link">here</a>.', [':link' => route('legal.revocation')])) !!}
                </p>
                <br />
                <p>
                    <strong>7 {{ t('Cancellation of seminars and cancellation costs for participants') }}</strong>
                </p>

                <p>(1) {{ t('As soon as you have received the confirmation email from us, your participation is binding.') }}</p>

                <p>(2) {!! html_entity_decode(t('In the event of cancellation <strong>up to 31 days</strong> before the start of the course, 25% of the fee is due.')) !!}</p>

                <p>(3) {!! html_entity_decode(t('If you cancel <strong>30 days or less</strong> before starting the course, we will charge 50% of the fee.')) !!}</p>

                <p>(4) {!! html_entity_decode(t('In the event of cancellation <strong>14 days or less</strong> before the courses start, the full amount is due.')) !!}</p>

                <p>(5) {{ t('If you participate later, we can offset the cancellation costs.') }}</p>

                <p>(6) {{ t('Alternatively, you can transfer the place to another person up to 7 days before starting the course.') }}</p>

                <p>(7) {{ t('If you drop out of the course, the full course fee will be withheld unless there is a medical certificate.') }}</p>

                <p>(8) {{ t('The cancellation must be made in writing.') }}</p>

                <br />

                <p>
                    <strong>8 {{ t('Cancellation of seminars by PrevHelp') }}</strong>
                </p>

                <p>(1) {{ t('We are entitled to cancel a seminar even at short notice if not enough participants have registered.') }} }}</p>

                <p>(2) {{ t('We are also entitled to cancel a seminar if the speaker falls ill at short notice, and a replacement cannot be provided.') }}</p>

                <p>(3) {{ t('In cases 1 and 2, we will refund your participation fee. We will not assume any further costs that you have incurred.') }}</p>

                <p>(4) {{ t('If you behave contrary to the contract by violating these general terms and conditions or our house rules, we have the right to exclude you from the course.') }}</p>

                <br />
                <p>
                    <strong>9 {{ t('Scope of services and unused services') }}</strong>
                </p>

                <p>(1) {{ t('The scope of services depends on the respective course booking.') }}</p>

                <p>(2) {{ t('If a participant does not use individual services, PrevHelp still reserves the right to invoice the entire fee still.') }}n</p>

                <p>(3) {{ t('Should an appointment or course fail if, for example, the instructor/lecturer is absent due to illness, we will catch it up immediately. If this is not possible, we will refund the fee for the open appointments.') }}</p>

                <p>
                    (4) {{ t('Courses that comply with DGUV Principle 304-001 can be settled directly with the responsible trade association (BG) or the accident insurance (UK) if at the latest at the beginning of the course if a valid registration form or a cost assumption certificate from the relevant BG / UK  is presented. In this case, the course is for the participant free of charge.') }}<br />
                    <br />
                    <em>{{ t('If the BG / UK refuses to assume the costs for reasons for which we are not responsible, or if the necessary documents are not submitted in good time, the participant or the sending agency/company will be charged a participation fee of € 60 / person in Invoices.') }}</em><br />
                </p>

                <p>(5) {{ t('If an in-house course/group event is booked, the minimum number of participants is 10. If this number is not reached, we will charge the course fee of at least 45 € / person for each missing participant.') }}</p>

                <p>
                    (6) {{ t('If at the customer\'s request, a room other than the one provided by us is used to hold the course, this must be made available free of charge or any costs incurred must be borne by the customer. The room has to have at least 50 m² floor space or at least two m² / participant + 10 m² for the teacher (in total at least 20 m²), be suitable in form, hygiene, and equipment, and otherwise meet the requirements of the workplace ordinance fulfill.') }}
                </p>

                <br />

                <p>
                    <strong>10 {{ t('General conditions of participation for our courses') }}</strong>
                </p>

                <p>(1) {{ t('The seminar leader/trainer/lecturer is authorized to issue instructions to the participants for the duration and within the event\'s framework.') }}</p>

                <p>(2) {{ t('By accepting these terms and conditions, each participant is informed of the following:') }}</p>

                <p>(3) {{ t('Participants should be at the venue at least 15 minutes before starting the course to record and check the personal data required.') }}

                <p>(4) {{ t('Participation may include physical activities and requires good health. To exclude injuries to the body and health, PrevHelp insures to meet its traffic safety obligations to the best of its knowledge and belief.') }}</p>

                <p>
                    (5) {{ t('Before each event, our trainer/lecturer must be informed about health problems and any relevant illnesses so that the applicable participant can be protected from harm as best as possible.') }}<br />
                    {{ t('PrevHelp is entitled to exclude the participant concerned from the event in the event of recognizable health problems.') }}
                </p>

                <p>(6) {{ t('The participant has to wear sturdy shoes and suitable clothing.') }}</p>

                <p>(7) {{ t('Participation is at your own risk.') }}</p>

                <p>(8) {{ t('PrevHelp assumes no liability for valuables brought along.') }}</p>

                <p>
                    (9) {{ t('You are obliged to cooperate in the event of service disruptions within the statutory provisions framework, to avoid possible damage or to keep it to a minimum. In particular, we ask you to notify the trainers/lecturers of any complaints immediately. If you fail to report a defect culpably, you forfeit your right to reduce the participation price.') }}
                </p>

                <p>(10) {{ t('Events, especially those in the so-called outdoor area, are never without a residual risk. You are only insured against an accident and rescue within the framework of your own accident insurance.') }}</p>

                <br />

                <p>
                    <strong>11 {{ t('Use of subcontractors') }}</strong>
                </p>

                <p>(1) {{ t('PrevHelp is authorized to call in subcontractors in its own name without requiring the customer\'s separate consent.') }}</p>

                <p>(2) {{ t('PrevHelp has concluded a confidentiality agreement with the subcontractor.') }}</p>

                <br />
                <p>
                    <strong>12 {{ t('Limitation of Liability') }}</strong>
                </p>

                <p>
                    (1) {{ t('We are liable for intent and gross negligence. Furthermore, we are liable for the negligent breach of obligations, the fulfillment of which enables the proper execution of the contract in the first place, the violation of which jeopardizes the achievement of the purpose of the agreement and on whose compliance you can regularly rely. In the latter case, however, we are only liable for the foreseeable, contract-typical damage. We are not liable for the slightly negligent breach of obligations other than those mentioned in the preceding sentences.') }}<br />
                    <br/>
                    {{ t('The above exclusions of liability do not apply to injury to life, limb, or health. Liability under the Product Liability Act remains unaffected.') }}
                </p>

                <p>(2) {{ t('According to the current state of technology, data communication via the Internet cannot be guaranteed to be error-free and/or available at all times. In this respect, we are not liable for the constant and uninterrupted availability of the online offer.') }}</p>

                <br />
                <p>
                    <strong>13 {{ t('Final provisions') }}</strong>
                </p>

                <p>
                    (1) {{ t('The terms and conditions written here are complete and final. Changes and additions to these terms and conditions should be made in writing to avoid ambiguity or disputes between the parties about the contract\'s agreed content, whereby e-mail is sufficient.') }}.
                </p>

                <p>
                    (2) {{ t('If you had your domicile or habitual abode in Germany when the contract was concluded and either moved from Germany at the time we filed the action or your domicile or habitual abode is unknown at that time, the place of jurisdiction for all disputes is the headquarters of our company in Wuppertal.') }}
                </p>

                <p>
                    (3) {{ t('We want to point out that in addition to the ordinary legal process, you also have the option of out-of-court settlement of disputes in accordance with Regulation (EU) No. 524/2013. Details can be found in Regulation (EU) No. 524/2013 and at the Internet address:') }} <a href="http://ec.europa.eu/consumers/odr">http://ec.europa.eu/consumers/odr</a><br />
                    <br />
                    {{ t('We are neither willing nor obliged to take part in dispute settlement proceedings before a consumer arbitration board.') }}
                </p>
            </div>
        </div>

    </div>
@endsection
