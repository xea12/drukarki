﻿import * as React from 'react';
 


import JqxButton from 'jqwidgets-scripts/jqwidgets-react-tsx/jqxbuttons';
import JqxLoader, { ILoaderProps } from 'jqwidgets-scripts/jqwidgets-react-tsx/jqxloader';

class App extends React.PureComponent<{}, ILoaderProps> {

    private myLoader = React.createRef<JqxLoader>();

    constructor(props: {}) {
        super(props);
        this.openLoaderClick = this.openLoaderClick.bind(this);
    }

    public render() {
        return (
            <div>
                <JqxLoader theme={'material-purple'} ref={this.myLoader}
                    width={100} height={60} imagePosition={'top'} isModal={true} />

                <JqxButton theme={'material-purple'} onClick={this.openLoaderClick} width={150}>
                    Open Loader
                </JqxButton>
            </div>
        );
    }

    private openLoaderClick(event: any): void {
        this.myLoader.current!.open();
    };
}

export default App;