
<div
    class="mt-4 bg-white rounded-lg shadow-md p-6 main"
    x-data="{{ json_encode(['messages' => $messages, 'messageBody' => '']) }}"
    x-init="
            Echo.join('demo')
                .listen('MessageSentEvent', (e) => {
                    @this.call('incomingMessage', e)
                })
            ">

<style>
    .head-title{
        padding: 20px 21px;
    background-color: #71aed2;
    }
    .head-title h3{
            text-align: center;
    font-size: 24px;
    color: white;
    }
    .bottom_line{
        height:2px;
        width:100%;
        background-color:black;
    }
    .main{
        padding: 30px 100px;
        background-color:#f4f7ff;
    }
    
    .btn-primary{
            background-color: #71aed2;
    padding: 0 23px;
    border-radius: 30px;
    }
    .btn-primary:focus{
        outline:none;
    }
    
    .my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
    background: #fff;
    padding: 10px 26px;
    border-radius: 12px;
    box-shadow: 7px 12px 18px -8px #8c8c8c;
}

.back-web{
        background-color: #ff6666;
    line-height: 3;
    padding: 0 9px;
    border-radius: 41px;
    margin-bottom: 6px;
    color:white;
    font-weight:bold;
}

@media(max-width:786px){
    .main{
        padding: 10px 20px;
    }
    
}
</style>
<div class="head-title">
    <h3>Welcome {{Auth::User()->name}} to Chat Room</h3></div>
<div class="bottom_line"></div>
    <div class="flex flex-row flex-wrap border-b">
        <div class="text-gray-600 w-full mb-4">Members:</div>

        @forelse($here as $authData)
            <div class="px-2 py-1 text-white bg-blue-700 rounded mr-4 mb-4">
                {{ $authData['name'] }}
            </div>
        @empty
            <div class="py-4 text-gray-600">
                It's quiet in here...
            </div>
        @endforelse
        <a href="/" class="back-web">Back to Website</a>
    </div>

    <template x-if="messages.length > 0">
        <template
            x-for="message in messages"
            :key="message.id"
        >
            <div class="my-8">
                <div class="flex flex-row justify-between border-b border-gray-200">
                    <span class="text-gray-600" x-text="message.user.name"></span>
                    <span class="text-gray-500 text-xs" x-text="message.created_at"></span>
                </div>
                <div class="my-4 text-gray-800" x-text="message.body"></div>
            </div>
        </template>
    </template>

    <template x-if="messages.length == 0">
        <div class="py-4 text-gray-600">
            It's quiet in here...
        </div>
    </template>

    <div
        class="flex flex-row justify-between" style="margin-bottom:20px"
    >
        <input
            @keydown.enter="
                @this.call('sendMessage', messageBody)
                messageBody = ''
            "
            x-model="messageBody"
            class="mr-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text"
            placeholder="Enter Message Here...!">

        <button
            @click="
                @this.call('sendMessage', messageBody)
                messageBody = ''
            "
            class="btn btn-primary self-stretch"
        >
            Send
        </button>
    </div>
    @error('messageBody') <div class="error mt-2">{{ $message }}</div> @enderror
</div>
