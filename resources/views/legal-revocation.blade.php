@extends('layouts.frontend')

@section('meta.title', t('Right of revocation') . ' | PrevHelp')

@section('body')
    <div class="container">

        <div class="row">
            <div class="col">
                <h2>{{ t('Right of revocation') }}</h2>

                <p>
                    <h4>{{ t('Right of revocation for consumers') }}</h4>
                </p>

                <p>{{ t('As a consumer, you have the right to withdraw from the contract within fourteen days without giving any reason.') }}</p>

                <p>{{ t('You have no right to cancellation if you expressly agreed when making your booking that the service\'s performance should begin before the end of the cancellation period. You have effectively waived your right of withdrawal. We pointed this out to you before the purchase was made.') }}</p>

                <p><strong>{{ t('Start of the deadline for booking courses or booking consultations') }}</strong></p>

                <p>{{ t('The cancellation period is fourteen days from the day the contract is concluded. The contract is concluded on the day on which you receive a confirmation email from us after successfully booking the course.') }}</p>

                <p>{{ t('You have your own 14-day right of cancellation for each booking. To exercise your right of withdrawal, you must contact us') }}</p>

                <p>
                    PrevHelp<br />
                    Holger Schmermbeck<br />
                    Edith-Stein-Str. 52<br />
                    42329 Wuppertal<br />
                    Tel. 0202 261 59 232<br />
                    Fax. 0202 898 37 567<br />
                    <a href="mailto:widerruf@prevhelp.de">widerruf@prevhelp.de</a>
                </p>

                <p>{{ t('in a clear statement (e.g., a letter sent by post, fax, or e-mail) of your decision to withdraw from this contract. You can use this sample cancellation form, which you will find at the end of this document, but which is not mandatory.') }}</p>

                <p>{{ t('To meet the cancellation deadline, it is sufficient for you to send your notification of exercising your right of cancellation before the cancellation period has expired.') }}</p>
                <br />

                <p>
                    <h4>{{ t('CONSEQUENCES OF REVOCATION') }}</h4>
                </p>

                <p>{{ t('If you revoke this contract, we have to repay all payments we have received from you at the latest within fourteen days from the day we received the notification of your revocation of this contract. For this repayment, we use the same payment method that you used for the original transaction unless something else was expressly agreed with you; In no case will you be charged any fees for this repayment.') }}</p>

                <p>{{ t('If you made the payment as a bank transfer, please send your account details again as we only see part of your account details on the account statement.') }}</p>
                <br />

                <p>
                    <h4>{{ t('SAMPLE REVOCATION TEMPLATE') }}</h4>
                </p>

                <p>{{ t('The model for the cancellation form is based on Appendix 2 to Article 246a § 1 Paragraph 2 Sentence 1 No. 1 and § 2 Paragraph 2 No. 2 EGBGB.') }}</p>

                <p>
                    <strong>{{ t('(If you want to revoke the contract, please fill out this form and send it back.)') }}</strong>
                </p>

                <p>{!! html_entity_decode(t('I/we (*) hereby revoke the contract concluded by me/us (*) for the booking of the following <em>course XY</em> / the following <em>consultation XY</em> (description, so that it can be clearly determined which course / which consultation the revocation refers to).')) !!}</p>
                <br />

                <p><li>{{ t('booked on') }} _________</li></p>

                <p><li>{{ t('Name of the consumer(s)') }}</li></p>

                <p><li>{{ t('Address of the consumer(s)') }}</li></p>

                <p> &nbsp; {{ t('if necessary, account details for the refund') }}</p>

                <p><li>{{ t('Signature of the consumer(s) (only for notifies on paper)') }}</li></p>

                <p><li>{{ t('date') }}</li></p>
                <br />

                <p>(*) {{ t('delete inapplicable') }}</p>
            </div>
        </div>

    </div>
@endsection
